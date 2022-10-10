<?php
/* Smarty version 3.1.43, created on 2022-09-28 14:29:54
  from '/Applications/MAMP/htdocs/cbdestock/themes/tv_electronic_electron_1_7_v1/templates/_partials/tvcms-page-loader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63343e4247c4a1_93762744',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e5771e4010fef9d7c81097215bd45639812da3a' => 
    array (
      0 => '/Applications/MAMP/htdocs/cbdestock/themes/tv_electronic_electron_1_7_v1/templates/_partials/tvcms-page-loader.tpl',
      1 => 1664286346,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63343e4247c4a1_93762744 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if (Configuration::get('TVCMSCUSTOMSETTING_PAGE_LOADER')) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_64091111063343e42474d73_55292138', 'page_loading');
}
}
/* {block 'page_loading'} */
class Block_64091111063343e42474d73_55292138 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_loading' => 
  array (
    0 => 'Block_64091111063343e42474d73_55292138',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="tvcms-loading-overlay"><div class="tvcms-loading-inner"><img class="logo img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"  height="51" width="205"/><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_url'], ENT_QUOTES, 'UTF-8');?>
themevolty/tv_loading.gif" alt="" height="101" width="114"/></div></div><?php
}
}
/* {/block 'page_loading'} */
}
