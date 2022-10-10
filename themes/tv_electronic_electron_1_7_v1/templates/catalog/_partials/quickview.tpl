{**
* 2007-2021 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License 3.0 (AFL-3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* https://opensource.org/licenses/AFL-3.0
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
* @license https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
* International Registered Trademark & Property of PrestaShop SA
*}
{strip}
    <div id="quickview-modal-{$product.id}-{$product.id_product_attribute}" class="modal fade quickview" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="tvmodel-close close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 tvquickview-prod-img">
                            {block name='product_cover_thumbnails'}
                            {include file='catalog/_partials/product-cover-thumbnails.tpl' QuickVar='Quick'}
                            {/block}
                            {* <div class="arrows js-arrows">
                                <i class="tvvertical-slider-next material-icons arrow-up js-arrow-up">&#xE316;</i>
                                <i class="tvvertical-slider-pre material-icons arrow-down js-arrow-down">&#xE313;</i>
                            </div> *}
                        </div>
                        <div class="col-md-6 col-sm-6 tvquickview-prod-details">
                            <h1 class="tvquickview-main-title">{$product.name}</h1>
                            {* Start Product Comment *}
                            {hook h='displayReviewProductList' product=$product}
                            {* End Product Comment *}
                            {block name='product_prices'}
                            {include file='catalog/_partials/product-prices.tpl'}
                            {/block}
                            {block name='product_description_short'}
                            <div id="product-description-short" itemprop="description">{$product.description_short nofilter}</div>
                            {/block}
                            {block name='product_buy'}
                            <div class="product-actions">
                                <form action="{$urls.pages.cart}" method="post" id="add-to-cart-or-refresh">
                                    <input type="hidden" name="token" value="{$static_token}">
                                    <input type="hidden" name="quickview" value="1">
                                    <input type="hidden" name="id_product" value="{$product.id}" id="product_page_product_id">
                                    <input type="hidden" name="id_customization" value="{$product.id_customization}" id="product_customization_id">
                                    {block name='product_variants'}
                                    {include file='catalog/_partials/product-variants.tpl'}
                                    {/block}
                                    {block name='product_add_to_cart'}
                                    {include file='catalog/_partials/product-add-to-cart.tpl'}
                                    {/block}
                                    {* Input to refresh product HTML removed, block kept for compatibility with themes *}
                                    {block name='product_refresh'}{/block}
                                </form>
                            </div>
                            {/block}
                            {* <div class='hrxwishlist-compare-wrapper-page'>
                                {hook h='displayWishlistProductPage' product=$product}
                                {hook h='displayProductCompareProductPage' product=$product}
                            </div> *}
                        </div>
                    </div>
                </div>
                {* <div class="modal-footer">
                    {hook h='displayProductAdditionalInfo' product=$product}
                </div> *}
            </div>
        </div>
    </div>    
{/strip}