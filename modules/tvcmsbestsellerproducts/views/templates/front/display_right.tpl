{**
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
*}
{strip}
{if $dis_arr_result.status && $dis_arr_result.right_status && count($dis_arr_result.data.product_list) > 0}

    {include file="module:tvcmsbestsellerproducts/views/templates/front/display_side_product.tpl" 
        main_title_status=$main_heading.main_right_title 
        main_title=$main_heading.data.right_title 
        products=$dis_arr_result.data.product_list 
        tv_product_type='best_seller_product_right'
        link=$dis_arr_result.link}

{/if}
{/strip}