<?php
/* Smarty version 3.1.43, created on 2022-09-28 14:36:15
  from '/Applications/MAMP/htdocs/cbdestock/themes/tv_electronic_electron_1_7_v1/templates/catalog/_partials/sort-orders.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63343fbfa27090_77537064',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc4d5f82c11c29b952ec3a54f06b93de85cc3629' => 
    array (
      0 => '/Applications/MAMP/htdocs/cbdestock/themes/tv_electronic_electron_1_7_v1/templates/catalog/_partials/sort-orders.tpl',
      1 => 1664286346,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63343fbfa27090_77537064 (Smarty_Internal_Template $_smarty_tpl) {
?><span class="col-sm-5 col-md-5 hidden-sm-down sort-by"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sort by:','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span><div class="<?php if (!empty($_smarty_tpl->tpl_vars['listing']->value['rendered_facets'])) {?>col-sm-7 col-xs-7<?php } else { ?>col-sm-12 col-xs-12<?php }?> col-md-7 products-sort-order dropdown"><button class="btn-unstyle select-title" rel="nofollow" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php if ((isset($_smarty_tpl->tpl_vars['listing']->value['sort_selected']))) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['listing']->value['sort_selected'], ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );
}?><i class="material-icons float-xs-right">&#xE5C5;</i></button><div class="dropdown-menu"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listing']->value['sort_orders'], 'sort_order');
$_smarty_tpl->tpl_vars['sort_order']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sort_order']->value) {
$_smarty_tpl->tpl_vars['sort_order']->do_else = false;
?><a rel="nofollow" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sort_order']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="select-list <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( array('current'=>$_smarty_tpl->tpl_vars['sort_order']->value['current'],'js-search-link'=>true) )), ENT_QUOTES, 'UTF-8');?>
" ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sort_order']->value['label'], ENT_QUOTES, 'UTF-8');?>
</a><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div><?php }
}
