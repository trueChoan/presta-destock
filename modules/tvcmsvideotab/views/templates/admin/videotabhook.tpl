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

{if $position_tab == 1}
    {if !empty($infor)}
        {if $infor[0]['type'] == 0 }
        <h3 class="page-product-heading">VIDEO</h3> 
        <div class="video_product">
            <section class="page-product-box">
                <div class="rte video_product">
                    {$infor[0]['text_url'] nofilter}{*Escape is unnecessary*}
                </div>
            </section>
        </div>
            
        {/if}
        
        {if $infor[0]['type'] == 1 }
        <h3 class="page-product-heading">VIDEO</h3> 
        <div class="video_product">
            <section class="page-product-box">
                <div class="rte" style="position: relative; cursor: pointer;" onclick="playtap()">
                    <video style=" height: auto; cursor: pointer;" controls id="myVideotab" >
                    <source src="{$url|escape:'htmlall':'UTF-8'}">
                    </video>
                </div>
            </section>
        </div>
        {/if}
    {/if}
{/if}