<?php
/* Smarty version 3.1.43, created on 2022-09-28 14:29:54
  from '/Applications/MAMP/htdocs/cbdestock/themes/tv_electronic_electron_1_7_v1/templates/catalog/_partials/product-activation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63343e42db93a4_70684174',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd355d655b1e5d2c8acc12a954fa42bbcf95435fb' => 
    array (
      0 => '/Applications/MAMP/htdocs/cbdestock/themes/tv_electronic_electron_1_7_v1/templates/catalog/_partials/product-activation.tpl',
      1 => 1664286346,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63343e42db93a4_70684174 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['page']->value['admin_notifications']) {?><div class="alert alert-warning row" role="alert"><div class="container"><div class="row"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['page']->value['admin_notifications'], 'notif');
$_smarty_tpl->tpl_vars['notif']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->do_else = false;
?><div class="col-sm-12"><i class="material-icons float-xs-left">&#xE001;</i><p class="alert-text"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['notif']->value['message'], ENT_QUOTES, 'UTF-8');?>
</p></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div></div><?php }
}
}