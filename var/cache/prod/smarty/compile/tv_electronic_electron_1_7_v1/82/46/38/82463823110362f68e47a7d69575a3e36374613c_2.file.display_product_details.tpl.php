<?php
/* Smarty version 3.1.43, created on 2022-09-28 14:30:00
  from '/Applications/MAMP/htdocs/cbdestock/modules/tvcmsproductcompare/views/templates/front/display_product_details.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63343e484cee20_04900598',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '82463823110362f68e47a7d69575a3e36374613c' => 
    array (
      0 => '/Applications/MAMP/htdocs/cbdestock/modules/tvcmsproductcompare/views/templates/front/display_product_details.tpl',
      1 => 1664286345,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63343e484cee20_04900598 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tvcompare-wrapper product_id_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
"><div class="product_id_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
"><button class="btn btn-unstyle tvcmsproduct-compare-btn" data-product-id='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
' data-comp-val='<?php if ($_smarty_tpl->tpl_vars['prod_1']->value == $_smarty_tpl->tpl_vars['product']->value['id_product'] || $_smarty_tpl->tpl_vars['prod_2']->value == $_smarty_tpl->tpl_vars['product']->value['id_product'] || $_smarty_tpl->tpl_vars['prod_3']->value == $_smarty_tpl->tpl_vars['product']->value['id_product'] || $_smarty_tpl->tpl_vars['prod_4']->value == $_smarty_tpl->tpl_vars['product']->value['id_product']) {?>remove<?php } else { ?>add<?php }?>' data-toggle="tvtooltip" data-placement="top" data-html="true" data-original-title="Add to Wishlist" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add To Compare','mod'=>'tvcmsproductcompare'),$_smarty_tpl ) );?>
"><i class='material-icons remove <?php if ($_smarty_tpl->tpl_vars['prod_1']->value == $_smarty_tpl->tpl_vars['product']->value['id_product'] || $_smarty_tpl->tpl_vars['prod_2']->value == $_smarty_tpl->tpl_vars['product']->value['id_product'] || $_smarty_tpl->tpl_vars['prod_3']->value == $_smarty_tpl->tpl_vars['product']->value['id_product'] || $_smarty_tpl->tpl_vars['prod_4']->value == $_smarty_tpl->tpl_vars['product']->value['id_product']) {
} else { ?>hide<?php }?>'>&#xe15c;</i><i class='material-icons add <?php if ($_smarty_tpl->tpl_vars['prod_1']->value == $_smarty_tpl->tpl_vars['product']->value['id_product'] || $_smarty_tpl->tpl_vars['prod_2']->value == $_smarty_tpl->tpl_vars['product']->value['id_product'] || $_smarty_tpl->tpl_vars['prod_3']->value == $_smarty_tpl->tpl_vars['product']->value['id_product'] || $_smarty_tpl->tpl_vars['prod_4']->value == $_smarty_tpl->tpl_vars['product']->value['id_product']) {?>hide<?php }?>'>&#xe043;</i></button></div></div><?php }
}
