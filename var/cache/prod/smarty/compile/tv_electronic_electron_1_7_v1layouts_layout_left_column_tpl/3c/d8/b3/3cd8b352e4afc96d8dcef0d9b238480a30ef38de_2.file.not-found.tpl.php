<?php
/* Smarty version 3.1.43, created on 2022-09-28 14:31:59
  from '/Applications/MAMP/htdocs/cbdestock/themes/tv_electronic_electron_1_7_v1/templates/errors/not-found.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63343ebf9091a2_17020955',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3cd8b352e4afc96d8dcef0d9b238480a30ef38de' => 
    array (
      0 => '/Applications/MAMP/htdocs/cbdestock/themes/tv_electronic_electron_1_7_v1/templates/errors/not-found.tpl',
      1 => 1664286346,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63343ebf9091a2_17020955 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<section id="content" class="page-content page-not-found"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_56586168463343ebf8f8f03_99331519', 'page_content');
?>
</section><?php }
/* {block 'search'} */
class Block_162756856463343ebf8ffda1_07653591 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displaySearch'),$_smarty_tpl ) );
}
}
/* {/block 'search'} */
/* {block 'hook_not_found'} */
class Block_7093745363343ebf904816_61238427 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNotFound'),$_smarty_tpl ) );
}
}
/* {/block 'hook_not_found'} */
/* {block 'page_content'} */
class Block_56586168463343ebf8f8f03_99331519 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_56586168463343ebf8f8f03_99331519',
  ),
  'search' => 
  array (
    0 => 'Block_162756856463343ebf8ffda1_07653591',
  ),
  'hook_not_found' => 
  array (
    0 => 'Block_7093745363343ebf904816_61238427',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sorry for the inconvenience.','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h4><p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search again what you are looking for','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</p><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_162756856463343ebf8ffda1_07653591', 'search', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7093745363343ebf904816_61238427', 'hook_not_found', $this->tplIndex);
}
}
/* {/block 'page_content'} */
}
