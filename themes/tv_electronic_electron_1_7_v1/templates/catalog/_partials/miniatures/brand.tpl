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
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2021 PrestaShop SA
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
{strip}
{block name='brand_miniature_item'}
  <li class="brand col-xs-12 col-sm-6 col-md-4 col-lg-3 ">
    <div class="tvbrand-inner">
      <div class="brand-img">
        <a href="{$brand.url}">
          <img src="{$brand.image}" alt="{$brand.name}">
        </a>
      </div>
      <div class="brand-infos">
        <div class="tvproduct-name">
          <div class="product-title">
            <a href="{$brand.url}">
              <h6>{$brand.name}</h6>
            </a>
          </div>
        </div>
        {$brand.text nofilter}
      </div>
      <div class="brand-products">
        <a href="{$brand.url}" class="tvbrand-link">{$brand.nb_products}</a>
        <a href="{$brand.url}" class="tvall-inner-btn">
          <span>{l s='View products' d='Shop.Theme.Actions'}</span>
        </a>
      </div>
    </div>
  </li>
{/block}
{/strip}