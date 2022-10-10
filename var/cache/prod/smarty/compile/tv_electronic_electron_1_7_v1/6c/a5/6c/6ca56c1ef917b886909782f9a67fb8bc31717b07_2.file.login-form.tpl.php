<?php
/* Smarty version 3.1.43, created on 2022-09-28 14:31:58
  from '/Applications/MAMP/htdocs/cbdestock/themes/tv_electronic_electron_1_7_v1/templates/customer/_partials/login-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63343ebe32ced6_16025041',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ca56c1ef917b886909782f9a67fb8bc31717b07' => 
    array (
      0 => '/Applications/MAMP/htdocs/cbdestock/themes/tv_electronic_electron_1_7_v1/templates/customer/_partials/login-form.tpl',
      1 => 1664286346,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/form-errors.tpl' => 1,
  ),
),false)) {
function content_63343ebe32ced6_16025041 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_23898994463343ebe310d25_48026741', 'login_form');
}
/* {block 'login_form_errors'} */
class Block_88792696563343ebe312334_19034031 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_partials/form-errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('errors'=>$_smarty_tpl->tpl_vars['errors']->value['']), 0, false);
}
}
/* {/block 'login_form_errors'} */
/* {block 'login_form_actionurl'} */
class Block_212680979663343ebe3170d6_17520529 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'login_form_actionurl'} */
/* {block 'form_field'} */
class Block_119479636963343ebe31c8e1_35901072 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_field'][0], array( array('field'=>$_smarty_tpl->tpl_vars['field']->value),$_smarty_tpl ) );
}
}
/* {/block 'form_field'} */
/* {block 'login_form_fields'} */
class Block_122109237463343ebe3195a7_27581109 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['formFields']->value, 'field');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_119479636963343ebe31c8e1_35901072', 'form_field', $this->tplIndex);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
/* {/block 'login_form_fields'} */
/* {block 'form_buttons'} */
class Block_12141966463343ebe326693_73224167 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<button id="submit-login" class="tvall-inner-btn form-control-submit" data-link-action="sign-in" type="submit"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign in','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span></button><?php
}
}
/* {/block 'form_buttons'} */
/* {block 'login_form_footer'} */
class Block_120014734463343ebe3250c5_46941325 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<footer class="form-footer text-center clearfix"><input type="hidden" name="submitLogin" value="1"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12141966463343ebe326693_73224167', 'form_buttons', $this->tplIndex);
?>
</footer><?php
}
}
/* {/block 'login_form_footer'} */
/* {block 'login_form'} */
class Block_23898994463343ebe310d25_48026741 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'login_form' => 
  array (
    0 => 'Block_23898994463343ebe310d25_48026741',
  ),
  'login_form_errors' => 
  array (
    0 => 'Block_88792696563343ebe312334_19034031',
  ),
  'login_form_actionurl' => 
  array (
    0 => 'Block_212680979663343ebe3170d6_17520529',
  ),
  'login_form_fields' => 
  array (
    0 => 'Block_122109237463343ebe3195a7_27581109',
  ),
  'form_field' => 
  array (
    0 => 'Block_119479636963343ebe31c8e1_35901072',
  ),
  'login_form_footer' => 
  array (
    0 => 'Block_120014734463343ebe3250c5_46941325',
  ),
  'form_buttons' => 
  array (
    0 => 'Block_12141966463343ebe326693_73224167',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_88792696563343ebe312334_19034031', 'login_form_errors', $this->tplIndex);
?>
<form id="login-form" action="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_212680979663343ebe3170d6_17520529', 'login_form_actionurl', $this->tplIndex);
?>
" method="post"><div><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_122109237463343ebe3195a7_27581109', 'login_form_fields', $this->tplIndex);
?>
<div class="forgot-password"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['password'], ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Forgot your password?','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</a></div></div><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_120014734463343ebe3250c5_46941325', 'login_form_footer', $this->tplIndex);
?>
</form><?php
}
}
/* {/block 'login_form'} */
}
