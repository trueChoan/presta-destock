<?php
/* Smarty version 3.1.43, created on 2022-09-28 14:30:02
  from 'module:pscategoryproductsviewste' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63343e4ac9fdb0_59835381',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39d31a599d73c039735add7bd5dc7a2a3a72c0ba' => 
    array (
      0 => 'module:pscategoryproductsviewste',
      1 => 1664286346,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product.tpl' => 1,
  ),
),false)) {
function content_63343e4ac9fdb0_59835381 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '146516766663343e4ac8d351_42761369';
?>
<div class="tvcmssame-category-product container-fluid"><div class='tvsame-category-product-wrapper-box container'><div class="tvsame-category-product-all-box"><div class="tvsame-category-product-content"><div class="tvall-block-box-shadows"><div class="tvsame-category-main-title-wrapper"><div class='tvcmsmain-title-wrapper'><div class="tvcms-main-title"><div class='tvmain-title'><h2><?php if (count($_smarty_tpl->tpl_vars['products']->value) == 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%s other product in the same category:','sprintf'=>array(count($_smarty_tpl->tpl_vars['products']->value)),'d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%s other products in the same category:','sprintf'=>array(count($_smarty_tpl->tpl_vars['products']->value)),'d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );
}?></h2></div></div></div></div><div class="tvsame-category-product"><div class="products owl-theme owl-carousel tvsame-category-product-wrapper tvproduct-wrapper-content-box"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
$_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'tv_product_type'=>"same_category_product"), 0, true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div></div></div><div class='tvsame-category-pagination-wrapper tv-pagination-wrapper'><div class="tvfeature-pagination"><div class="tvcmssame-category-pagination"><div class="tvcmssame-category-next-pre-btn tvcms-next-pre-btn"><div class="tvcmssame-category-prev tvcmsprev-btn" data-parent="tvcmssame-category-product"><i class='material-icons'>&#xe314;</i></div><div class="tvcmssame-category-next tvcmsnext-btn" data-parent="tvcmssame-category-product"><i class='material-icons'>&#xe315;</i></div></div></div></div></div></div></div></div><?php }
}
