<?php
/* Smarty version 3.1.43, created on 2022-09-28 14:31:56
  from '/Applications/MAMP/htdocs/cbdestock/themes/tv_electronic_electron_1_7_v1/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63343ebc51a0e5_47220363',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8fd9901da1e0b563f2bea3421db0e4cf46f1b45c' => 
    array (
      0 => '/Applications/MAMP/htdocs/cbdestock/themes/tv_electronic_electron_1_7_v1/templates/page.tpl',
      1 => 1664286346,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63343ebc51a0e5_47220363 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_86847638163343ebc50c3f9_88788549', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_header_container'} */
class Block_90127884663343ebc50d790_12353538 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_157624550163343ebc510682_02953966 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_31172855163343ebc512071_39715642 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Page content --><?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_176391745563343ebc50f4a5_41628102 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="content" class="page-content card card-block"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_157624550163343ebc510682_02953966', 'page_content_top', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_31172855163343ebc512071_39715642', 'page_content', $this->tplIndex);
?>
</div><?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_197043998963343ebc515e66_15558416 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Footer content --><?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_27939466363343ebc514ca3_49613991 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<footer class="page-footer"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_197043998963343ebc515e66_15558416', 'page_footer', $this->tplIndex);
?>
</footer><?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_86847638163343ebc50c3f9_88788549 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_86847638163343ebc50c3f9_88788549',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_90127884663343ebc50d790_12353538',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_176391745563343ebc50f4a5_41628102',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_157624550163343ebc510682_02953966',
  ),
  'page_content' => 
  array (
    0 => 'Block_31172855163343ebc512071_39715642',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_27939466363343ebc514ca3_49613991',
  ),
  'page_footer' => 
  array (
    0 => 'Block_197043998963343ebc515e66_15558416',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="main"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_90127884663343ebc50d790_12353538', 'page_header_container', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_176391745563343ebc50f4a5_41628102', 'page_content_container', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_27939466363343ebc514ca3_49613991', 'page_footer_container', $this->tplIndex);
?>
</div><?php
}
}
/* {/block 'content'} */
}
