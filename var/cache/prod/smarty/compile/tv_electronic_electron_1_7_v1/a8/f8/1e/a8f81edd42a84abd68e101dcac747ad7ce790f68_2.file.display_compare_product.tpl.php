<?php
/* Smarty version 3.1.43, created on 2022-09-28 14:30:03
  from '/Applications/MAMP/htdocs/cbdestock/modules/tvcmsproductcompare/views/templates/front/display_compare_product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63343e4b262740_26873211',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8f81edd42a84abd68e101dcac747ad7ce790f68' => 
    array (
      0 => '/Applications/MAMP/htdocs/cbdestock/modules/tvcmsproductcompare/views/templates/front/display_compare_product.tpl',
      1 => 1664286345,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63343e4b262740_26873211 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tvcompare-wrapper product_id_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
"><div class="tvproduct-compare tvcmsproduct-compare-btn tvproduct-compare-icon" data-product-id='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
' data-comp-val='<?php if ($_smarty_tpl->tpl_vars['prod_1']->value == $_smarty_tpl->tpl_vars['product']->value['id_product'] || $_smarty_tpl->tpl_vars['prod_2']->value == $_smarty_tpl->tpl_vars['product']->value['id_product'] || $_smarty_tpl->tpl_vars['prod_3']->value == $_smarty_tpl->tpl_vars['product']->value['id_product'] || $_smarty_tpl->tpl_vars['prod_4']->value == $_smarty_tpl->tpl_vars['product']->value['id_product']) {?>remove<?php } else { ?>add<?php }?>' data-toggle="tvtooltip" data-placement="top" data-html="true" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add To Compare','mod'=>'tvcmsproductcompare'),$_smarty_tpl ) );?>
"><i class='material-icons remove <?php if ($_smarty_tpl->tpl_vars['prod_1']->value == $_smarty_tpl->tpl_vars['product']->value['id_product'] || $_smarty_tpl->tpl_vars['prod_2']->value == $_smarty_tpl->tpl_vars['product']->value['id_product'] || $_smarty_tpl->tpl_vars['prod_3']->value == $_smarty_tpl->tpl_vars['product']->value['id_product'] || $_smarty_tpl->tpl_vars['prod_4']->value == $_smarty_tpl->tpl_vars['product']->value['id_product']) {
} else { ?>hide<?php }?>'>&#xe15c;</i><i class='material-icons add <?php if ($_smarty_tpl->tpl_vars['prod_1']->value == $_smarty_tpl->tpl_vars['product']->value['id_product'] || $_smarty_tpl->tpl_vars['prod_2']->value == $_smarty_tpl->tpl_vars['product']->value['id_product'] || $_smarty_tpl->tpl_vars['prod_3']->value == $_smarty_tpl->tpl_vars['product']->value['id_product'] || $_smarty_tpl->tpl_vars['prod_4']->value == $_smarty_tpl->tpl_vars['product']->value['id_product']) {?>hide<?php }?>'>&#xe043;</i></div></div><?php }
}
