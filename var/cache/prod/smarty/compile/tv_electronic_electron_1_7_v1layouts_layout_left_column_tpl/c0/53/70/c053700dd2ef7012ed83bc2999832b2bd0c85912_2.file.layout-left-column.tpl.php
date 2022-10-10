<?php
/* Smarty version 3.1.43, created on 2022-09-28 14:31:56
  from '/Applications/MAMP/htdocs/cbdestock/themes/tv_electronic_electron_1_7_v1/templates/layouts/layout-left-column.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63343ebc59e3b3_35360498',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c053700dd2ef7012ed83bc2999832b2bd0c85912' => 
    array (
      0 => '/Applications/MAMP/htdocs/cbdestock/themes/tv_electronic_electron_1_7_v1/templates/layouts/layout-left-column.tpl',
      1 => 1664286346,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63343ebc59e3b3_35360498 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_125075230463343ebc5240e6_47199398', 'right_column');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7751292563343ebc5267a1_14606647', 'content_wrapper');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'right_column'} */
class Block_125075230463343ebc5240e6_47199398 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_125075230463343ebc5240e6_47199398',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_column'} */
/* {block 'content'} */
class Block_122467327463343ebc598305_86198582 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<p>Hello world! This is HTML5 Boilerplate.</p><?php
}
}
/* {/block 'content'} */
/* {block 'content_wrapper'} */
class Block_7751292563343ebc5267a1_14606647 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_7751292563343ebc5267a1_14606647',
  ),
  'content' => 
  array (
    0 => 'Block_122467327463343ebc598305_86198582',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="content-wrapper" class="left-column <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] != 'contact') {?> col-xl-10 col-lg-12 col-md-12 col-sm-12 col-xs-12 <?php } else { ?> col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 <?php }?>"><?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );
}
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_122467327463343ebc598305_86198582', 'content', $this->tplIndex);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>
</div><?php
}
}
/* {/block 'content_wrapper'} */
}
