<?php
/**
* 2007-2021 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author    PrestaShop SA <contact@prestashop.com>
*  @copyright 2007-2021 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

require_once(dirname(__FILE__).'/../../config/config.inc.php');
require_once(dirname(__FILE__).'/../../init.php');
require_once(dirname(__FILE__).'/tvcmspaymenticon.php');

// Instance of module class for translations


$update_position = Tools::getValue('action');
$position = Tools::getValue('recordsArray');
$return_data = array();
if ($update_position == 'update_position') {
    $return_data['success'] = 'right';
    updatePosition($position);
    echo $res = implode("##", $return_data);
}

function updatePosition($position)
{
    $update_position = array();
    foreach ($position as $key => $value) {
        $pos = $key + 1;
        $update_position[] = 'UPDATE 
                                        `'._DB_PREFIX_.'tvcmspaymenticon` 
                                    SET
                                        `position` = '.$pos.'
                                    WHERE
                                        `id_tvcmspaymenticon` = '.$value.';';
    }
    foreach ($update_position as $data) {
        Db::getInstance()->execute($data);
    }
}
