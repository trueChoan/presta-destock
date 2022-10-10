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
* @author PrestaShop SA <contact@prestashop.com>
    * @copyright 2007-2021 PrestaShop SA
    * @license http://opensource.org/licenses/afl-3.0.php Academic Free License (AFL 3.0)
    * International Registered Trademark & Property of PrestaShop SA
    *}
    {strip}
    {if $dis_arr_result['status']}
    <div class="container-fluid tvcmsbrandlist-slider">
        <div class='container tvbrandlist-slider'>
            <div class='tvcmsbrandlist-slider-main-title-wrapper'>
                {include file='_partials/tvcms-main-title.tpl' main_heading=$main_heading path=$dis_arr_result['path']}
            </div>
            <div class="tvbrandlist-slider-block">
                <div class='tvbrandlist-slider-inner tvbrandlist-slider-content-box owl-theme owl-carousel'>
                    {foreach $dis_arr_result['data'] as $data}
                    <div class="item tvbrandlist-slider-wrapper-info wow zoomIn tvall-block-box-shadows">
                        <div class="tvbrand-img-block">
                            <a href="{$data['link']}">
                                <img src="{$dis_arr_result['path']}{$data['image']}" alt="{$data['title']}" title="{$data['title']}" class="tv-img-responsive" width="170" height="75" loading="lazy"/>
                            </a>
                        </div>
                    </div>
                    {/foreach}
                </div>
            </div>
            <div class='tvcms-brandlist-pagination-wrapper'>
                <div class="tvcms-brandlist-next-pre-btn">
                    <div class="tvbrandlist-slider-prev tvcmsprev-btn"><i class='material-icons'>&#xe5cb;</i></div>
                    <div class="tvbrandlist-slider-next tvcmsnext-btn"><i class='material-icons'>&#xe5cc;</i></div>
                </div>
            </div>
        </div>
    </div>
    {/if}
    {/strip}