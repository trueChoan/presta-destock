<?php
/* Smarty version 3.1.43, created on 2022-10-10 11:16:31
  from '/Applications/MAMP/htdocs/cbdestock/themes/classic/templates/catalog/_partials/product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6343e2ef9ecec4_04083364',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de724c83b19dc5bad04e5144cf94971c48efc341' => 
    array (
      0 => '/Applications/MAMP/htdocs/cbdestock/themes/classic/templates/catalog/_partials/product-additional-info.tpl',
      1 => 1664276050,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6343e2ef9ecec4_04083364 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info js-product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
