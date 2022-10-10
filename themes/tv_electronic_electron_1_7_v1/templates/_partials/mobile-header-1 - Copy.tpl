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
<div id='tvcms-mobile-view-header' class="hidden-lg-up mobile-header-1">
    <div class="tvcmsmobile-top-wrapper">
        <div class='tvmobileheader-offer-wrapper col-sm-12'>
            {hook h='displayTopOfferText'}
        </div>
        {*<div class='tvmobileheader-language-currency-wrapper col-xl-6 col-lg-6 col-md-6 col-sm-12'>
            <div class="tvheader-language">{if $withData}{hook h='displayNavLanguageBlock'}{/if}</div>
            <div class="tvheader-currency">{if $withData}{hook h='displayNavCurrencyBlock'}{/if}</div>
        </div>*}
    </div>
    <div class='tvcmsmobile-header-search-logo-wrapper'>
        <div class="tvcmsmobile-header-logo-right-wrapper col-md-3 col-sm-12">
            <div id='tvcmsmobile-header-logo'>
                {if $withData}
                <a href="{$urls.base_url}" class="tv-header-logo">
                    <img class="logo img-responsive" src="{$shop.logo}" alt="{$shop.name}" height="34" width="200">
                </a>
                {/if}
            </div>
        </div>
        <div class="tvcmsmobile-header-search col-md-9 col-sm-12">
            <div id="tvcmsmobile-search">{if $withData}{hook h='displayNavSearchBlock'}{/if}</div>
        </div>
    </div>
    <div class='tvcmsmobile-header-menu-offer-text tvcmsheader-sticky'>
        <div class="tvcmsmobile-header-menu col-sm-2 col-xs-2">
            <div class="tvmobile-sliderbar-btn">
                <a href="Javascript:void(0);" title=""><i class='material-icons'>&#xe5d2;</i></a>
            </div>
            <div class="tvmobile-slidebar">
                <div class="tvmobile-dropdown-close">
                    <a href="Javascript:void(0);"><i class='material-icons'>&#xe14c;</i></a>
                </div>
                <div id='tvmobile-megamenu'>
                    {if $withData}{hook h='displayMegamenu'}{/if}
                </div>
                <div class="tvcmsmobile-contact">{if $withData}{hook h='displayNav1'}{/if}</div>
                <div id='tvmobile-lang'>{if $withData}{hook h='displayNavLanguageBlock'}{/if}</div>
                <div id='tvmobile-curr'>{if $withData}{hook h='displayNavCurrencyBlock'}{/if}</div>
            </div>
        </div>
        <div class="col-sm-10 col-xs-10 tvcmsmobile-cart-acount-text">
            <div id="tvcmsmobile-account-button">
                {if $withData}
                <div class="tvcms-header-myaccount">
                    <div class="tv-header-account">
                        <div class="tv-account-wrapper">
                            <button class="btn-unstyle tv-myaccount-btn tv-myaccount-btn-desktop">
                                {* <i class='material-icons'>&#xe7ff;</i> *}
                                <svg version="1.1" id="Layer_1" x="0px" y="0px" width="30.932px" height="31.088px" viewBox="0 0 30.932 31.088" style="enable-background:new 0 0 30.932 31.088;" xml:space="preserve">
                                    <g>
                                        <path style="fill:none;stroke:#000000;stroke-width:0.55;stroke-miterlimit:10;" d="M15.444,17.898
    c7.457,0,13.596,5.579,14.509,12.789h0.513c-1.226-7.997-7.473-13.061-15.001-13.061c-7.528,0-13.776,5.063-14.999,13.061h0.47
    C1.848,23.479,7.987,17.898,15.444,17.898z"></path>
                                        <path style="fill:#FFD742;" d="M15.466,17.151c-4.23,0-7.67-3.438-7.67-7.668c0-4.231,3.44-7.671,7.67-7.671
    c4.232,0,7.67,3.439,7.67,7.671C23.136,13.714,19.698,17.151,15.466,17.151"></path> 
                                        <circle style="fill:none;stroke:#000000;stroke-miterlimit:10;" cx="15.466" cy="9.49" r="8.152"></circle>
                                    </g>
                                </svg>
                                {* {if $customer.is_logged }
                                <span class="tvcms_customer_name">{$customer.gender.name[$customer.gender.id]} {$customer.firstname} {$customer.lastname}</span>
                                {else}
                                <span>{l s='My Account' d='Shop.Theme.Catalog'}</span>
                                {/if} *}
                            </button>
                            <ul class="dropdown-menu tv-account-dropdown tv-dropdown">
                                {if $customer.is_logged }
                                <li><a href="{$urls.pages.my_account}" class="tvmyccount">{l s='My Account' d='Shop.Theme.Catalog'}</a></li>
                                {/if}
                                <li>{hook h='displayNavCustomerSignInBlock'}</li>
                                <li>{hook h='displayNavWishlistBlock'}</li>
                                <li>{hook h='displayNavProductCompareBlock'}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                {/if}
            </div>
            <div id="tvmobile-cart">{if $withData}{hook h='displayNavShoppingCartBlock'}{/if}</div>
        </div>
    </div>
    {* <div class="tvcmsmobile-header-right">
        <div id='tvcmsmobile-horizontal-menu-left'></div>
    </div> *}
</div>
{/strip}