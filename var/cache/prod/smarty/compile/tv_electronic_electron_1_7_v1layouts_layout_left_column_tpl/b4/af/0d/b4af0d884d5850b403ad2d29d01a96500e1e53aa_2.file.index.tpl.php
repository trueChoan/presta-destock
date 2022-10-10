<?php
/* Smarty version 3.1.43, created on 2022-09-28 14:35:58
  from '/Applications/MAMP/htdocs/cbdestock/themes/tv_electronic_electron_1_7_v1/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63343fae5bc230_70558884',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4af0d884d5850b403ad2d29d01a96500e1e53aa' => 
    array (
      0 => '/Applications/MAMP/htdocs/cbdestock/themes/tv_electronic_electron_1_7_v1/templates/index.tpl',
      1 => 1664286346,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63343fae5bc230_70558884 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_123479207463343fae5b0309_29132713', 'page_content_container');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_26347242163343fae5b1e70_43850673 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_171933139663343fae5b5c07_13965826 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_86622687363343fae5b4435_85764753 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_171933139663343fae5b5c07_13965826', 'hook_home', $this->tplIndex);
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_123479207463343fae5b0309_29132713 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_123479207463343fae5b0309_29132713',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_26347242163343fae5b1e70_43850673',
  ),
  'page_content' => 
  array (
    0 => 'Block_86622687363343fae5b4435_85764753',
  ),
  'hook_home' => 
  array (
    0 => 'Block_171933139663343fae5b5c07_13965826',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<section id="content" class="page-home"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_26347242163343fae5b1e70_43850673', 'page_content_top', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_86622687363343fae5b4435_85764753', 'page_content', $this->tplIndex);
?>
</section><?php
}
}
/* {/block 'page_content_container'} */
}
