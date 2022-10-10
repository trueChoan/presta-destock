<?php
/* Smarty version 3.1.43, created on 2022-09-28 14:29:50
  from '/Applications/MAMP/htdocs/cbdestock/themes/tv_electronic_electron_1_7_v1/templates/layouts/layout-full-width.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63343e3e51f058_26881110',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a40ef3192d181de119743cf9018817cf81fee5f7' => 
    array (
      0 => '/Applications/MAMP/htdocs/cbdestock/themes/tv_electronic_electron_1_7_v1/templates/layouts/layout-full-width.tpl',
      1 => 1664286346,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63343e3e51f058_26881110 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_55368068363343e3e50fd72_79741374', 'left_column');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_126085044563343e3e511e47_57849988', 'right_column');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_187255650863343e3e513ce6_55626664', 'content_wrapper');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'left_column'} */
class Block_55368068363343e3e50fd72_79741374 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_55368068363343e3e50fd72_79741374',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'left_column'} */
/* {block 'right_column'} */
class Block_126085044563343e3e511e47_57849988 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_126085044563343e3e511e47_57849988',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_column'} */
/* {block 'content'} */
class Block_177099523163343e3e51a030_91845974 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<p>Hello world! This is HTML5 Boilerplate.</p><?php
}
}
/* {/block 'content'} */
/* {block 'content_wrapper'} */
class Block_187255650863343e3e513ce6_55626664 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_187255650863343e3e513ce6_55626664',
  ),
  'content' => 
  array (
    0 => 'Block_177099523163343e3e51a030_91845974',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="content-wrapper" class="col-sm-12"><?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );
}
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_177099523163343e3e51a030_91845974', 'content', $this->tplIndex);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>
</div><?php
}
}
/* {/block 'content_wrapper'} */
}
