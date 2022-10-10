<?php
/* Smarty version 3.1.43, created on 2022-09-28 14:31:57
  from '/Applications/MAMP/htdocs/cbdestock/themes/tv_electronic_electron_1_7_v1/templates/_partials/notifications.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63343ebda83547_83231533',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd3db9cee854dd98f5938a371634960572f32941a' => 
    array (
      0 => '/Applications/MAMP/htdocs/cbdestock/themes/tv_electronic_electron_1_7_v1/templates/_partials/notifications.tpl',
      1 => 1664286346,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63343ebda83547_83231533 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if ((isset($_smarty_tpl->tpl_vars['notifications']->value))) {?><aside id="notifications"><div class="container"><?php if ($_smarty_tpl->tpl_vars['notifications']->value['error']) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_160274592963343ebda5e2e8_63136510', 'notifications_error');
}
if ($_smarty_tpl->tpl_vars['notifications']->value['warning']) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_26749755863343ebda67e08_22193622', 'notifications_warning');
}
if ($_smarty_tpl->tpl_vars['notifications']->value['success']) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17062623863343ebda70da2_18115426', 'notifications_success');
}
if ($_smarty_tpl->tpl_vars['notifications']->value['info']) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_172529359163343ebda7ad67_01972207', 'notifications_info');
}?></div></aside><?php }
}
/* {block 'notifications_error'} */
class Block_160274592963343ebda5e2e8_63136510 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications_error' => 
  array (
    0 => 'Block_160274592963343ebda5e2e8_63136510',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<article class="alert alert-danger" role="alert" data-alert="danger"><ul><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notifications']->value['error'], 'notif');
$_smarty_tpl->tpl_vars['notif']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->do_else = false;
?><li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul></article><?php
}
}
/* {/block 'notifications_error'} */
/* {block 'notifications_warning'} */
class Block_26749755863343ebda67e08_22193622 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications_warning' => 
  array (
    0 => 'Block_26749755863343ebda67e08_22193622',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<article class="alert alert-warning" role="alert" data-alert="warning"><ul><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notifications']->value['warning'], 'notif');
$_smarty_tpl->tpl_vars['notif']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->do_else = false;
?><li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul></article><?php
}
}
/* {/block 'notifications_warning'} */
/* {block 'notifications_success'} */
class Block_17062623863343ebda70da2_18115426 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications_success' => 
  array (
    0 => 'Block_17062623863343ebda70da2_18115426',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<article class="alert alert-success" role="alert" data-alert="success"><ul><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notifications']->value['success'], 'notif');
$_smarty_tpl->tpl_vars['notif']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->do_else = false;
?><li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul></article><?php
}
}
/* {/block 'notifications_success'} */
/* {block 'notifications_info'} */
class Block_172529359163343ebda7ad67_01972207 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications_info' => 
  array (
    0 => 'Block_172529359163343ebda7ad67_01972207',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<article class="alert alert-info" role="alert" data-alert="info"><ul><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notifications']->value['info'], 'notif');
$_smarty_tpl->tpl_vars['notif']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->do_else = false;
?><li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul></article><?php
}
}
/* {/block 'notifications_info'} */
}
