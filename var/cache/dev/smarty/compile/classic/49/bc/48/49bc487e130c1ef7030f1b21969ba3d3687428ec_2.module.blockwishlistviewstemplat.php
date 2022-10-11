<?php
/* Smarty version 3.1.43, created on 2022-10-11 10:41:20
  from 'module:blockwishlistviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63452c30237f14_02414900',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49bc487e130c1ef7030f1b21969ba3d3687428ec' => 
    array (
      0 => 'module:blockwishlistviewstemplat',
      1 => 1664276040,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63452c30237f14_02414900 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /Applications/MAMP/htdocs/cbdestock/modules/blockwishlist/views/templates/hook/product/add-button.tpl --><div
  class="wishlist-button"
  data-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url']->value, ENT_QUOTES, 'UTF-8');?>
"
  data-product-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
"
  data-product-attribute-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
"
  data-is-logged="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value['is_logged'], ENT_QUOTES, 'UTF-8');?>
"
  data-list-id="1"
  data-checked="true"
  data-is-product="true"
></div>

<!-- end /Applications/MAMP/htdocs/cbdestock/modules/blockwishlist/views/templates/hook/product/add-button.tpl --><?php }
}
