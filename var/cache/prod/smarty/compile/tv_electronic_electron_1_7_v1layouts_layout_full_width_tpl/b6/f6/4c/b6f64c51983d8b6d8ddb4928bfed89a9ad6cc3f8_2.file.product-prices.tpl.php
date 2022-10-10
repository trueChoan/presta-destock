<?php
/* Smarty version 3.1.43, created on 2022-09-28 14:29:59
  from '/Applications/MAMP/htdocs/cbdestock/themes/tv_electronic_electron_1_7_v1/templates/catalog/_partials/product-prices.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63343e478a9ec6_54830963',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b6f64c51983d8b6d8ddb4928bfed89a9ad6cc3f8' => 
    array (
      0 => '/Applications/MAMP/htdocs/cbdestock/themes/tv_electronic_electron_1_7_v1/templates/catalog/_partials/product-prices.tpl',
      1 => 1664286346,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63343e478a9ec6_54830963 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?><div class="product-prices"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_136491858463343e4783ee16_77697274', 'product_price');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_92880646163343e4786d8e5_22619405', 'product_without_taxes');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_143480452563343e47874e42_02125072', 'product_pack_price');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_101208665763343e4787b365_09622274', 'product_ecotax');
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"weight",'hook_origin'=>'product_sheet'),$_smarty_tpl ) );?>
<div class="tax-shipping-delivery-label"><?php if ($_smarty_tpl->tpl_vars['configuration']->value['return_enabled']) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Return policy:','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );
echo htmlspecialchars($_smarty_tpl->tpl_vars['configuration']->value['number_of_days_for_return'], ENT_QUOTES, 'UTF-8');
}?><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['delivery_in_stock'], ENT_QUOTES, 'UTF-8');?>
</span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"price"),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"after_price"),$_smarty_tpl ) );
if ($_smarty_tpl->tpl_vars['product']->value['additional_delivery_times'] == 1) {
if ($_smarty_tpl->tpl_vars['product']->value['delivery_information']) {?><span class="delivery-information"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['delivery_information'], ENT_QUOTES, 'UTF-8');?>
</span><?php }
} elseif ($_smarty_tpl->tpl_vars['product']->value['additional_delivery_times'] == 2) {
if ($_smarty_tpl->tpl_vars['product']->value['quantity'] > 0) {?><span class="delivery-information"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['delivery_in_stock'], ENT_QUOTES, 'UTF-8');?>
</span><?php } elseif ($_smarty_tpl->tpl_vars['product']->value['quantity'] == 0 && $_smarty_tpl->tpl_vars['product']->value['add_to_cart_url']) {?><span class="delivery-information"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['delivery_out_stock'], ENT_QUOTES, 'UTF-8');?>
</span><?php }
}?></div></div><?php }
}
/* {block 'product_discount'} */
class Block_171225995063343e478484c7_83204538 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?><div class="product-discount"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>
<span class="regular-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span></div><?php }
}
}
/* {/block 'product_discount'} */
/* {block 'product_unit_price'} */
class Block_177248544563343e4785c7d6_30705789 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['displayUnitPrice']->value) {?><p class="product-unit-price sub"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(%unit_price%)','d'=>'Shop.Theme.Catalog','sprintf'=>array('%unit_price%'=>$_smarty_tpl->tpl_vars['product']->value['unit_price_full'])),$_smarty_tpl ) );?>
</p><?php }
}
}
/* {/block 'product_unit_price'} */
/* {block 'product_price'} */
class Block_136491858463343e4783ee16_77697274 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_price' => 
  array (
    0 => 'Block_136491858463343e4783ee16_77697274',
  ),
  'product_discount' => 
  array (
    0 => 'Block_171225995063343e478484c7_83204538',
  ),
  'product_unit_price' => 
  array (
    0 => 'Block_177248544563343e4785c7d6_30705789',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="product-price h5 <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>has-discount<?php }?>" itemprop="offers" itemscope itemtype="https://schema.org/Offer"><link itemprop="availability" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['seo_availability'], ENT_QUOTES, 'UTF-8');?>
" /><meta itemprop="priceCurrency" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
"><div class="current-price"><span class="price" itemprop="price" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price_amount'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span></div><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_171225995063343e478484c7_83204538', 'product_discount', $this->tplIndex);
if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {
if ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'percentage') {?><span class="discount discount-percentage"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save %percentage%','d'=>'Shop.Theme.Catalog','sprintf'=>array('%percentage%'=>$_smarty_tpl->tpl_vars['product']->value['discount_percentage_absolute'])),$_smarty_tpl ) );?>
</span><?php } else { ?><span class="discount discount-amount"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save %amount%','d'=>'Shop.Theme.Catalog','sprintf'=>array('%amount%'=>$_smarty_tpl->tpl_vars['product']->value['discount_to_display'])),$_smarty_tpl ) );?>
</span><?php }
}
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_177248544563343e4785c7d6_30705789', 'product_unit_price', $this->tplIndex);
if (Configuration::get('PS_TAX')) {?><div class="tvproduct-tax-label"><?php if ($_smarty_tpl->tpl_vars['configuration']->value['taxes_enabled']) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tax Included','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tax Excluded','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );
}?></div><?php }?></div><?php
}
}
/* {/block 'product_price'} */
/* {block 'product_without_taxes'} */
class Block_92880646163343e4786d8e5_22619405 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_without_taxes' => 
  array (
    0 => 'Block_92880646163343e4786d8e5_22619405',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['priceDisplay']->value == 2) {?><p class="product-without-taxes"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%price% tax excl.','d'=>'Shop.Theme.Catalog','sprintf'=>array('%price%'=>$_smarty_tpl->tpl_vars['product']->value['price_tax_exc'])),$_smarty_tpl ) );?>
</p><?php }
}
}
/* {/block 'product_without_taxes'} */
/* {block 'product_pack_price'} */
class Block_143480452563343e47874e42_02125072 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_pack_price' => 
  array (
    0 => 'Block_143480452563343e47874e42_02125072',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['displayPackPrice']->value) {?><p class="product-pack-price"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Instead of %price%','d'=>'Shop.Theme.Catalog','sprintf'=>array('%price%'=>$_smarty_tpl->tpl_vars['noPackPrice']->value)),$_smarty_tpl ) );?>
</span></p><?php }
}
}
/* {/block 'product_pack_price'} */
/* {block 'product_ecotax'} */
class Block_101208665763343e4787b365_09622274 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_ecotax' => 
  array (
    0 => 'Block_101208665763343e4787b365_09622274',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['product']->value['ecotax']['amount'] > 0) {?><p class="price-ecotax"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Including %amount% for ecotax','d'=>'Shop.Theme.Catalog','sprintf'=>array('%amount%'=>$_smarty_tpl->tpl_vars['product']->value['ecotax']['value'])),$_smarty_tpl ) );
if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(not impacted by the discount)','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );
}?></p><?php }
}
}
/* {/block 'product_ecotax'} */
}
