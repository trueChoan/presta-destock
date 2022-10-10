<?php
/* Smarty version 3.1.43, created on 2022-09-28 14:31:57
  from '/Applications/MAMP/htdocs/cbdestock/themes/tv_electronic_electron_1_7_v1/templates/_partials/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63343ebd34a2e8_07125062',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62aee9d1d641cc427ff8773b34372a1ea32c3051' => 
    array (
      0 => '/Applications/MAMP/htdocs/cbdestock/themes/tv_electronic_electron_1_7_v1/templates/_partials/header.tpl',
      1 => 1664286346,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/desktop-header.tpl' => 2,
    'file:_partials/mobile-header.tpl' => 2,
  ),
),false)) {
function content_63343ebd34a2e8_07125062 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_132894730363343ebd339462_02267697', 'header_nav');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_147412121863343ebd33b829_82914589', 'header_top');
}
/* {block 'header_nav'} */
class Block_132894730363343ebd339462_02267697 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_nav' => 
  array (
    0 => 'Block_132894730363343ebd339462_02267697',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'header_nav'} */
/* {block 'header_top'} */
class Block_147412121863343ebd33b829_82914589 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_top' => 
  array (
    0 => 'Block_147412121863343ebd33b829_82914589',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if (Context::getContext()->getDevice() == 1) {
$_smarty_tpl->_subTemplateRender('file:_partials/desktop-header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('withData'=>true), 0, false);
$_smarty_tpl->_subTemplateRender('file:_partials/mobile-header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('withData'=>false), 0, false);
} else {
$_smarty_tpl->_subTemplateRender('file:_partials/desktop-header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('withData'=>false), 0, true);
$_smarty_tpl->_subTemplateRender('file:_partials/mobile-header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('withData'=>true), 0, true);
}
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavFullWidth'),$_smarty_tpl ) );
}
}
/* {/block 'header_top'} */
}
