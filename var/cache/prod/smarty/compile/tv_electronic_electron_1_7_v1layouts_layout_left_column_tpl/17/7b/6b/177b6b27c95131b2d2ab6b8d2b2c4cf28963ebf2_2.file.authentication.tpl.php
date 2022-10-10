<?php
/* Smarty version 3.1.43, created on 2022-09-28 14:31:56
  from '/Applications/MAMP/htdocs/cbdestock/themes/tv_electronic_electron_1_7_v1/templates/customer/authentication.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63343ebc4fc036_82559540',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '177b6b27c95131b2d2ab6b8d2b2c4cf28963ebf2' => 
    array (
      0 => '/Applications/MAMP/htdocs/cbdestock/themes/tv_electronic_electron_1_7_v1/templates/customer/authentication.tpl',
      1 => 1664286346,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63343ebc4fc036_82559540 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8441207263343ebc4e40c7_12636261', 'page_content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_title'} */
class Block_211071875563343ebc4e6115_52929551 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="form-title"><h1><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log in to your account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</h1></div><?php
}
}
/* {/block 'page_title'} */
/* {block 'display_after_login_form'} */
class Block_157890634763343ebc4f2324_05227025 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCustomerLoginFormAfter'),$_smarty_tpl ) );
}
}
/* {/block 'display_after_login_form'} */
/* {block 'login_form_container'} */
class Block_87960653663343ebc4ee401_81940953 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="login-form"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['render'][0], array( array('file'=>'customer/_partials/login-form.tpl','ui'=>$_smarty_tpl->tpl_vars['login_form']->value),$_smarty_tpl ) );?>
</div><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_157890634763343ebc4f2324_05227025', 'display_after_login_form', $this->tplIndex);
?>
<div class="no-account"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['register'], ENT_QUOTES, 'UTF-8');?>
" data-link-action="display-register-form"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No account? Create one here','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</a></div><?php
}
}
/* {/block 'login_form_container'} */
/* {block 'page_content'} */
class Block_8441207263343ebc4e40c7_12636261 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_8441207263343ebc4e40c7_12636261',
  ),
  'page_title' => 
  array (
    0 => 'Block_211071875563343ebc4e6115_52929551',
  ),
  'login_form_container' => 
  array (
    0 => 'Block_87960653663343ebc4ee401_81940953',
  ),
  'display_after_login_form' => 
  array (
    0 => 'Block_157890634763343ebc4f2324_05227025',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_211071875563343ebc4e6115_52929551', 'page_title', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_87960653663343ebc4ee401_81940953', 'login_form_container', $this->tplIndex);
}
}
/* {/block 'page_content'} */
}
