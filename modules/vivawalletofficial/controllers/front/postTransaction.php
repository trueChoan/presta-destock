<?php
/**
 * 2007-2021 PrestaShop
 *
 * NOTICE OF LICENSE
 * Permission is hereby granted, free of charge, to any person obtaining
 * a copy of this software and associated documentation files (the "Software"),
 * to use the Software, excluding the rights to copy, modify, merge,
 * publish, distribute, sublicense, and/or sell copies of the Software,
 * subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall
 * remain in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
 * EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
 * MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
 * IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY
 * CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT,
 * TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE
 * SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 *  @author    Viva Wallet <support@vivawallet.com>
 *  @copyright 2021 Viva Wallet
 *  @license   Commercial license
 */

declare(strict_types=1);
if (!defined('_PS_VERSION_')) {
    exit;
}

class VivaWalletOfficialPostTransactionModuleFrontController extends ModuleFrontController
{
    public function initContent()
    {
        $response = $this->postTransaction();
        echo Tools::jsonEncode($response);
        exit;
    }

    /**
     * @throws Exception
     */
    public function postTransaction(): array
    {
        $success = false;
        if (!empty($this->context->cart->id)) {
            $this->context->cookie->vw_cart_id = $this->context->cart->id;
            $this->context->cookie->write();
        } elseif (!empty($this->context->cookie->vw_cart_id)) {
            $this->context->cart = new Cart((int) $this->context->cookie->vw_cart_id);
        }
        $amount = $this->context->cart->getOrderTotal(true, Cart::BOTH);
        try {
            $order = $this->createOrder($amount);
        } catch (Exception $e) {
            PrestaShopLogger::addLog($e->getMessage(), 3);
        }
        if (!empty($order)) {
            try {
                $payment = $this->payment($amount);
                $transaction_id = $payment['success'] ? ($payment['response']['payload']['transactionId'] ?? null) : null;
            } catch (Exception $e) {
                PrestaShopLogger::addLog($e->getMessage(), 3);
            }
            if (!empty($transaction_id)) {
                $id_order_state = (int) Configuration::get(Configuration::get('VIVAWALLET_CHECKOUT_PREFERRED_STATUS'));

                $this->saveTransaction($transaction_id, $amount);
                $this->setTransactionId($order, $transaction_id);
                $order->setCurrentState($id_order_state);
                $success = true;
                unset($this->context->cookie->vw_cart_id);
            } elseif (!isset($payment['response']['error_message']['exception_type'])
                || 'transfer' != $payment['response']['error_message']['exception_type']
            ) {
                $id_order_state = (int) Configuration::get('PS_OS_ERROR');
                $order->setCurrentState($id_order_state);
            }
        }

        return $success
            ? [
                'url' => Context::getContext()->link->getPageLink(
                    'order-confirmation',
                    true,
                    null,
                    [
                        'id_cart' => (int) $this->context->cart->id,
                        'id_module' => (int) $this->module->id,
                        'id_order' => (int) Order::getIdByCartId($this->context->cart->id),
                        'key' => $this->context->customer->secure_key,
                    ]
                ),
            ]
            : ['error' => true];
    }

    /**
     * @throws PrestaShopDatabaseException
     * @throws PrestaShopException
     */
    public function createOrder(float $amount): ?Order
    {
        $order = null;

        if ($this->module->active
            && 0 != $this->context->cart->id_customer
            && 0 != $this->context->cart->id_address_delivery
            && 0 != $this->context->cart->id_address_invoice
            && Validate::isLoadedObject($this->context->customer)
            && in_array('vivawalletofficial', array_column(Module::getPaymentModules(), 'name'))
        ) {
            if ($this->context->cart->orderExists()) {
                $order = new Order(Order::getIdByCartId($this->context->cart->id));
            } elseif ($this->module->validateOrder(
                    (int) $this->context->cart->id,
                    Configuration::get($this->module::VIVAWALLET_OS_PENDING),
                    $amount,
                    $this->module->displayName,
                    null,
                    [],
                    $this->context->cart->id_currency,
                    false,
                    $this->context->customer->secure_key
                )
                && !empty($this->module->currentOrder)
            ) {
                $order = new Order($this->module->currentOrder);
            }
        }

        if (empty($order)) {
            PrestaShopLogger::addLog('Create Order was unsuccessful', 3);
        }

        return $order;
    }

    public function payment(float $amount)
    {
        $client = VivawalletOfficial::getVivaWalletClient();
        $chargeToken = Tools::getValue('charge_token');
        $customerData = [
            'email' => Tools::getValue('email'),
            'phone' => Tools::getValue('phone'),
            'fullname' => Tools::getValue('fullname'),
            'requestLang' => Tools::getValue('request_lang'),
            'countryCode' => Tools::getValue('country_code'),
        ];
        $installmentsValidated = $this->validateInstallments((int) Tools::getValue('instalments'), $amount);
        $successfulPayment = false;
        $response = [];
        if ($installmentsValidated) {
            $response = $client->createTransaction(
                (int) (string) ($amount * 100),
                $chargeToken,
                $this->context->currency->iso_code,
                $customerData,
                $this->getSourceCode(),
                $this->getTransactionMessages($customerData),
                (int) Tools::getValue('instalments'),
                false
            );

            $response = json_decode($response, true);
            $successfulPayment = (200 === $response['response_code'] && !empty($response['payload']['transactionId']));
            if (!$successfulPayment) {
                PrestaShopLogger::addLog(json_encode($response), 3);
            }
        } else {
            PrestaShopLogger::addLog('Invalid Installments input', 3);
        }

        return ['success' => $successfulPayment, 'response' => $response];
    }

    public function setTransactionId($order, $transaction_id): bool
    {
        return Db::getInstance()->update(
            'order_payment',
            ['transaction_id' => pSQL($transaction_id)],
            'order_reference = "' . pSQL($order->reference) . '"'
        );
    }

    private function getSourceCode()
    {
        $isDemo = Configuration::get('VIVAWALLET_CHECKOUT_DEMO_MODE') === '1' ? true : false;
        if ($isDemo === true) {
            return Configuration::get('VIVAWALLET_CHECKOUT_DEMO_SOURCE') ?: null;
        }

        return Configuration::get('VIVAWALLET_CHECKOUT_LIVE_SOURCE') ?: null;
    }

    private function getTransactionMessages($customerData)
    {
        return [
            'merchantTrns' => 'Payment by ' . $customerData['email'],
            'customerTrns' => 'Payment to ' . Configuration::get('PS_SHOP_NAME'),
        ];
    }

    private function saveTransaction(string $transactionId, float $amount)
    {
        $isDemo = Configuration::get('VIVAWALLET_CHECKOUT_DEMO_MODE') === '1' ? true : false;
        $clientId = ($isDemo === true)
                ? Configuration::get('VIVAWALLET_CHECKOUT_DEMO_CLIENT_ID')
                : Configuration::get('VIVAWALLET_CHECKOUT_LIVE_CLIENT_ID');

        $amount = number_format($amount, 2, '.', '');

        $transactionData = [
            'transaction_id' => pSQL($transactionId),
            'is_demo' => (bool) $isDemo,
            'amount' => pSQL($amount),
            'cart_id' => pSQL($this->context->cart->id),
            'client_id' => pSQL($clientId),
            'currency' => pSQL($this->context->currency->iso_code),
            'is_refund' => (bool) 0,
            'date_add' => date('Y-m-d H:i:s'),
        ];

        VivawalletOfficial::saveTransactionInDb($transactionData);
    }

    private function validateInstallments($installments, $amount): bool
    {
        $maxInstallments = 0;
        if ($installments > 1) {
            $installmentsLogic = Configuration::get('VIVAWALLET_CHECKOUT_INSTALLMENTS');
            $country = new Country(Configuration::get('PS_COUNTRY_DEFAULT'));
            $installmentsAllowed = ('GR' === $country->iso_code);
            if ($installmentsAllowed && !empty($installmentsLogic)) {
                $installmentsLogicParts = array_map('trim', explode(',', $installmentsLogic));
                foreach ($installmentsLogicParts as $installmentsLogicPart) {
                    $installmentOptions = array_map('trim', explode(':', $installmentsLogicPart));
                    $installmentsAmount = $installmentOptions[0];
                    $installmentsTerm = $installmentOptions[1];
                    if ($amount >= $installmentsAmount && $installmentsTerm > $maxInstallments) {
                        $maxInstallments = $installmentsTerm;
                    }
                }
            }
        }

        return in_array($installments, [0, 1]) || $installments <= $maxInstallments;
    }
}
