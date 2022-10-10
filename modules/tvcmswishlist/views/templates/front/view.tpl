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
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2021 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
{strip}
{extends file='page.tpl'}
{block name='page_content'}
<div id="view_wishlist">
    <div class="tvwilshlist-view-title page-heading bottom-indent">
        {l s='Wishlist' mod='tvcmswishlist'}
    </div>
    {if $wishlists}
        <p class="tvwishlist-view-page-first-dec">
            <strong class="dark">
                {l s='Other wishlists of %1s %2s:' sprintf=[$current_wishlist.firstname, $current_wishlist.lastname] mod='tvcmswishlist'}
            </strong>
            {foreach from=$wishlists item=wishlist name=i}
                {if $wishlist.id_wishlist != $current_wishlist.id_wishlist}
                    <a href="{$link->getModuleLink('tvcmswishlist', 'view', ['token' => $wishlist.token])|escape:'html':'UTF-8'}" rel="nofollow" title="{$wishlist.name|escape:'html':'UTF-8'}">
                        {$wishlist.name|escape:'htmlall':'UTF-8'}
                    </a>
                    {* {if !$smarty.foreach.i.last}
                        /
                    {/if} *}
                {/if}
            {/foreach}
        </p>
    {/if}
    <div class="wlp_bought">
        {assign var='nbItemsPerLine' value=3}
        {assign var='nbItemsPerLineTablet' value=2}
        {assign var='nbLi' value=$products|@count}
        {math equation="nbLi/nbItemsPerLine" nbLi=$nbLi nbItemsPerLine=$nbItemsPerLine assign=nbLines}
        {math equation="nbLi/nbItemsPerLineTablet" nbLi=$nbLi nbItemsPerLineTablet=$nbItemsPerLineTablet assign=nbLinesTablet}
        <ul class=" wlp_bought_list">
            {foreach from=$products item=product name=i}
                {math equation="(total%perLine)" total=$smarty.foreach.i.total perLine=$nbItemsPerLine assign=totModulo}
                {math equation="(total%perLineT)" total=$smarty.foreach.i.total perLineT=$nbItemsPerLineTablet assign=totModuloTablet}
                {if $totModulo == 0}{assign var='totModulo' value=$nbItemsPerLine}{/if}
                {if $totModuloTablet == 0}{assign var='totModuloTablet' value=$nbItemsPerLineTablet}{/if}
                <li id="wlp_{$product.id_product|escape:'htmlall':'UTF-8'}_{$product.id_product_attribute|escape:'htmlall':'UTF-8'}" class="ajax_block_product col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 {if $smarty.foreach.i.iteration%$nbItemsPerLine == 0} last-in-line{elseif $smarty.foreach.i.iteration%$nbItemsPerLine == 1} first-in-line{/if} {if $smarty.foreach.i.iteration > ($smarty.foreach.i.total - $totModulo)}last-line{/if} {if $smarty.foreach.i.iteration%$nbItemsPerLineTablet == 0}last-item-of-tablet-line{elseif $smarty.foreach.i.iteration%$nbItemsPerLineTablet == 1}first-item-of-tablet-line{/if} {if $smarty.foreach.i.iteration > ($smarty.foreach.i.total - $totModuloTablet)}last-tablet-line{/if}">
                    <div class="tvwishlist-view-all-block-content">
                        <div class="tvwishlist-product-view-img-block">
                            <div class="product_image">
                                <a href="{$link->getProductlink($product.id_product, $product.link_rewrite, $product.category_rewrite)|escape:'html':'UTF-8'}" title="{l s='Product detail' mod='tvcmswishlist'}">
                                    <img class="replace-2x img-responsive" src="{$link->getImageLink($product.link_rewrite, $product.cover, 'home_default')|escape:'html':'UTF-8'}" alt="{$product.name|escape:'html':'UTF-8'}"/>
                                </a>
                            </div>
                        </div>
                        <div class="tvwishlist-view-product-info-box">
                            <div class="product_infos">
                                <p id="s_title" class="product-name">
                                    {$product.name|truncate:30:'...'|escape:'html':'UTF-8'}
                                    {if isset($product.attributes_small)}
                                        <a href="{$link->getProductlink($product.id_product, $product.link_rewrite, $product.category_rewrite)|escape:'html':'UTF-8'}" title="{l s='Product detail' mod='tvcmswishlist'}">
                                            <small>{$product.attributes_small|escape:'html':'UTF-8'}</small>
                                        </a>
                                    {/if}
                                </p>
                                <div class="wishlist_product_detail">
                                    <p class="form-group">
                                        <label for="quantity_{$product.id_product|escape:'htmlall':'UTF-8'}_{$product.id_product_attribute|escape:'htmlall':'UTF-8'}">
                                            {l s='Quantity' mod='tvcmswishlist'}:
                                        </label>
                                        <input class="form-control grey" type="text" id="quantity_{$product.id_product|escape:'htmlall':'UTF-8'}_{$product.id_product_attribute|escape:'htmlall':'UTF-8'}" value="{$product.quantity|intval|escape:'htmlall':'UTF-8'}" size="3"/>
                                    </p>

                                    <p class="form-group selector1">
                                        <span><strong>{l s='Priority' mod='tvcmswishlist'}:</strong> {$product.priority_name|escape:'htmlall':'UTF-8'}</span>
                                    </p>
                                    <div class="btn_action">
                                        {if (isset($product.attribute_quantity) && $product.attribute_quantity >= 1) || (!isset($product.attribute_quantity) && $product.product_quantity >= 1) || (isset($product.allow_oosp) && $product.allow_oosp)}
                                                <form action="{$urls.pages.cart|escape:'htmlall':'UTF-8'}" method="post">
                                                    <input type="hidden" name="token" value="{$static_token|escape:'htmlall':'UTF-8'}" />
                                                    <input type="hidden" value="{$product.id_product|escape:'htmlall':'UTF-8'}" name="id_product" />
                                                    <input type="hidden" class="input-group form-control" name="qty" min="1" value="1" />
                                                    <button data-button-action="add-to-cart" class="btn btn-primary">
                                                        {l s='Add To Cart' mod='tvcmswishlist'}
                                                        {* <i class='material-icons add-cart'>&#xe8cc;</i> *}
                                                    </button>
                                                </form>
                                        {else}
                                            <span class="button ajax_add_to_cart_button btn btn-default disabled">
												<span>{l s='Add to cart' mod='tvcmswishlist'}</span>
											</span>
                                        {/if}
                                        <a class="button lnk_view btn btn-primary btn-default tvwishlist-view-product-view-btn" href="{$link->getProductLink($product.id_product,  $product.link_rewrite, $product.category_rewrite)|escape:'html':'UTF-8'}" title="{l s='View' mod='tvcmswishlist'}" rel="nofollow">
                                            <span>{l s='View' mod='tvcmswishlist'}</span>
                                        </a>
                                    </div>
                                    <!-- .btn_action -->
                                </div>
                                <!-- .wishlist_product_detail -->
                            </div>
                            <!-- .product_infos -->
                        </div>
                    </div>
                </li>
            {/foreach}
        </ul>
    </div>
</div> <!-- #view_wishlist -->
{/block}
{/strip}