{**
* 2007-2021 PrestaShop
*
* NOTICE OF LICENSE
* * This source file is subject to the Academic Free License (AFL 3.0)
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
* @author PrestaShop SA <contact@prestashop.com>
    * @copyright 2007-2021 PrestaShop SA
    * @license http://opensource.org/licenses/afl-3.0.php Academic Free License (AFL 3.0)
    * International Registered Trademark & Property of PrestaShop SA
    *}
    {strip}
    {if $main_heading['main_image_status']}
    {$col = 'col-xl-10 col-lg-9 col-md-9 col-sm-8 col-xs-12 tvimage-true'}
    {$image = true}
    {if $main_heading['main_image_side'] == 'left'}
        {$image_side = 'left'}
    {else}
    {$image_side = 'right'}
    {/if}
    {else}
    {$col = ''}
    {$image = ''}
    {$image_side = ''}
    {/if}
    {if $dis_arr_result.status}
    <div class="tvtab-product-wrapper container">
        <div class="tvtab-product-all-box">
            <div class="tvtab-product">
                <div class='tvtab-main-title-wrapper'>
                    {include file='_partials/tvcms-main-title.tpl' main_heading=$main_heading path=$dis_arr_result['path']}
                    <div class="tvtab-title-wrapper">
                        <div class="tvtab-title">
                            <ul class="tvtabs-products">
                                {$tmp = true}
                                {foreach $dis_arr_tab_list.data as $data}
                                <li class="tvtab-name tab-index {if $tmp}active{/if}" data-status-config="{$data.status_config}" data-tab-data='{$data.tab_name_id}' data-tab-paging='{$data.tab_name_class_pagination}' data-tab-data-slider-class='{$data.tab_name_class_slider}'><span>{$data.tab_name}</span></li>                                
                                {$tmp = false}
                                {/foreach}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tvtab-product-branner">
                {if $image == true && $image_side == 'left'}
                <div class="tvall-product-branner col-xl-2 col-lg-3 col-md-3 col-sm-4">
                    <div class="tvall-block-box-shadows">
                        <div class="tvbanner-hover-wrapper">
                            <div class='tvbanner-hover'></div>
                            <img src="{$dis_arr_result.path}{$main_heading.data.image}" alt="{l s='Tab Product' mod='tvcmstabproducts'}" width="{$main_heading.data.width}" height="{$main_heading.data.height}" class="tv-img-responsive" loading="lazy">
                            <div class='tvbanner-hover1'></div>
                        </div>
                    </div>
                </div>
                {/if}
                <div class="tvtab-product-all-pagination {$col}">
                    <div class="tvall-block-box-shadows">
                        <div class='tvtab-product-list-wrapper'>
                            {$tmp = true}
                            {foreach $dis_arr_result.data as $tab_products}
                            <div id="{$tab_products.tab_name_id}" class="tvcmstab-product {if $tmp}active{/if} {$tab_products.tab_name_class_slider} tvcmstab-product-detail">
                                <div class="products owl-theme owl-carousel tvproduct-wrapper-content-box tvall-tab-product-block {$tab_products.tab_name_class_slider}" data-has-image='{if $image == true}true{else}false{/if}'>
                                    {if Configuration::get('TVCMSCUSTOMSETTING_TAB_PRODUCT_ROW')}
                                    {$count = 1}{* for double row *}
                                    {$double_row = true}
                                    {$single_row = false}
                                    {else}
                                    {$count = 5}{* for single row *}
                                    {$double_row = false}
                                    {$single_row = true}
                                    {/if}
                                    {foreach $tab_products.product_list as $product}
                                    {if $count == '1'}
                                    <div class="tvtabproduct-main-block item">
                                        {$double_row = true}
                                        {/if}
                                        {include file="catalog/_partials/miniatures/product.tpl" product=$product tv_product_type='tab_product' tab_slider=true double_row=$double_row}
                                        {$double_row = false}
                                        {if $count == '2'}
                                    </div>
                                    {$count = '0'}
                                    {/if}
                                    {$count = $count + 1}
                                    {/foreach}
                                    {if $count != '1' && !$single_row}
                                </div>
                                {/if}
                            </div>
                            <div class='tvtab-pagination-wrapper tv-pagination-wrapper'>
                                <div class="{$tab_products.tab_name_class_pagination}-pagination tvtab-pagination {if $tmp}active{/if}"></div>
                                <div class="{$tab_products.tab_name_class_pagination}-pagination tvtab-pagination {if $tmp}active{/if}">
                                    <div class="{$tab_products.tab_name_class_pagination}-pagination-next-pre-btn tvcms-next-pre-btn">
                                        <div class="{$tab_products.tab_name_class_slider}-prev tvcmsprev-btn" data-parent="{$tab_products.tab_name_id}">
                                            <i class='material-icons'>&#xe314;</i>
                                        </div>
                                        <div class="{$tab_products.tab_name_class_slider}-next tvcmsnext-btn" data-parent="{$tab_products.tab_name_id}">
                                            <i class='material-icons'>&#xe315;</i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {$tmp = false}
                        {/foreach}                        
                    </div>
                </div>
            </div>
            {if $image == true && $image_side == 'right'}
            <div class="tvall-product-branner col-xl-2 col-lg-3 col-md-3 col-sm-4">
                <div class="tvall-block-box-shadows">
                    <div class="tvbanner-hover-wrapper">
                        <div class='tvbanner-hover'></div>
                        <img src="{$dis_arr_result.path}{$main_heading.data.image}" alt="{l s='Tab Product' mod='tvcmstabproducts'}" width="{$main_heading.data.width}" height="{$main_heading.data.height}" class="tv-img-responsive" loading="lazy">
                        <div class='tvbanner-hover1'></div>
                    </div>
                </div>
            </div>
            {/if}
        </div>
    </div>
    </div>
    {/if}
    {/strip}