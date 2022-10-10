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
{block name='page_content_container'}
<div class="page-contents product-2" id="content">
    {block name='page_content'}
    <div class="images-container">
        {block name='product_cover_thumbnails'}
        {block name='product_cover'}
        <div class="product-cover">
            <div class="tvproduct-image-slider">
                {block name='product_flags'}
                <ul class="tvproduct-flags tvproduct-online-new-wrapper">
                    {foreach from=$product.flags item=flag}
                    {if $flag.type == 'online-only' || $flag.type == 'new'}
                    <li class="product-flag {$flag.type}">{$flag.label}</li>
                    {/if}
                    {/foreach}
                </ul>
                <ul class="tvproduct-flags tvproduct-sale-pack-wrapper">
                    {foreach from=$product.flags item=flag}
                    {if $flag.type == 'on-sale' || $flag.type == 'pack'}
                    <li class="product-flag {$flag.type}">{$flag.label}</li>
                    {/if}
                    {/foreach}
                </ul>
                {/block}
                {if $product.default_image} 
                {foreach from=$product.images item=image}
                <div class="col-md-6">
                    <img src="{$image.bySize.large_default.url}" alt="{$image.legend}" title="{$image.legend}" height="{$product.default_image.bySize.large_default.height}" width="{$product.default_image.bySize.large_default.width}" itemprop="image" loading="lazy">
                </div>
                {/foreach}
                {* <div class="layer" data-toggle="modal" data-target="#product-modal">
                    <i class='material-icons'>&#xe3c2;</i>
                </div> *}
                {else}
                <img src="{$urls.no_picture_image.bySize.large_default.url}" loading="lazy">
                {/if}
            </div>
        </div>
        {/block}
        {/block}
        {block name='product_images'}
        <div class="tvvertical-slider col-sm-3">
            <div class="product-images">
                {foreach from=$product.images item=image}
                <div class="tvcmsVerticalSlider item">
                    <picture>
                        <source srcset="{$image.bySize.medium_default.url}" media="(max-width: 768px)">
                        <img src="{$image.bySize.home_default.url}" class="thumb js-thumb {if $image.id_image == $product.cover.id_image} selected {/if}" data-image-medium-src="{$image.bySize.medium_default.url}"  data-image-large-src="{$image.bySize.large_default.url}" alt="{$product.name}" title="{$product.name}" height="{$image.bySize.side_product_default.height}" width="{$image.bySize.side_product_default.width}" itemprop="image" loading="lazy">
                    </picture>
                </div>
                {/foreach}
            </div>
            <div class="arrows js-arrows">
                <i class="tvvertical-slider-next material-icons arrow-up js-arrow-up">&#xE316;</i>
                <i class="tvvertical-slider-pre material-icons arrow-down js-arrow-down">&#xE313;</i>
            </div>
        </div>
        {/block}
    </div>
    {/block}
</div>
{/block}
{/strip}