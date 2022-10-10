{*
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
* to license@buy-addons.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
* @author    Buy-addons    <contact@buy-addons.com>
* @copyright 2007-2021 Buy-addons
* @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

{if $position_popup == 1}
    {if !empty($url)}
        <div class="tvproduct-play-icon">
                <a href="{$url}" class="fancybox fancybox.iframe">
                    {* <i class="material-icons">&#xe037;</i> *}
                    <img src="{$url1|escape:'htmlall':'UTF-8'}modules/tvcmsvideotab/views/img/iconvideo.png" alt="{l s='LIVE VIDEO' mod='tvcmsvideotab'}" style="margin-top:-4px;" height="16px" width="19px" loading="lazy">
                    <span>{l s='LIVE VIDEO' mod='tvcmsvideotab'}</span>
                </a>
            </div>
        {/if}
{/if}