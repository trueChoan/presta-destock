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
{if $GetStatusSupplier == 1}
<div id="search_filters_suppliers" class='tvfilter-supplier-list-wrapper'>
  <div class="facet">
    <div class="tvleft-right-title-wrapper">
      {if $display_link_supplier}
      <a class="tvleft-right-title facet-label" href="{$page_link}" title="{l s='Suppliers' d='Shop.Theme.Catalog'}">{/if}
        {l s='Suppliers' d='Shop.Theme.Catalog'}
      {if $display_link_supplier}</a>
      {/if}
      <div class='tvleft-right-title-toggle'>
          <i class='material-icons'>&#xe313;</i>
        </div>
    </div>
    <div class="tvserach-filter-suppliers tvside-panel-dropdown">
      {if $suppliers}
        {include file="module:ps_supplierlist/views/templates/_partials/$supplier_display_type.tpl" suppliers=$suppliers}
      {else}
        <p>{l s='No supplier' d='Shop.Theme.Catalog'}</p>
      {/if}
    </div>
  </div>
</div>
{else if $GetStatusSupplier == 0 & $page.page_name == 'index'}
<div id="search_filters_suppliers" class='tvfilter-supplier-list-wrapper'>
  <div class="facet">
    <div class="tvleft-right-title-wrapper">
      {if $display_link_supplier}
      <a class="tvleft-right-title facet-label" href="{$page_link}" title="{l s='Suppliers' d='Shop.Theme.Catalog'}">{/if}
        {l s='Suppliers' d='Shop.Theme.Catalog'}
      {if $display_link_supplier}</a>
      {/if}
      <div class='tvleft-right-title-toggle'>
          <i class='material-icons'>&#xe313;</i>
        </div>
    </div>
    <div class="tvserach-filter-suppliers tvside-panel-dropdown">
      {if $suppliers}
        {include file="module:ps_supplierlist/views/templates/_partials/$supplier_display_type.tpl" suppliers=$suppliers}
      {else}
        <p>{l s='No supplier' d='Shop.Theme.Catalog'}</p>
      {/if}
    </div>
  </div>
</div>
{/if}
{/strip}