<?php
/* Smarty version 3.1.43, created on 2022-09-28 14:29:50
  from '/Applications/MAMP/htdocs/cbdestock/themes/tv_electronic_electron_1_7_v1/templates/layouts/layout-both-columns.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63343e3e65bbd9_51496451',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a06aa7d7d71eb043a0fd04c5805b3f190450103e' => 
    array (
      0 => '/Applications/MAMP/htdocs/cbdestock/themes/tv_electronic_electron_1_7_v1/templates/layouts/layout-both-columns.tpl',
      1 => 1664286346,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/head.tpl' => 1,
    'file:_partials/tvcms-javascript-files.tpl' => 1,
    'file:_partials/tvcms-page-loader.tpl' => 1,
    'file:catalog/_partials/product-activation.tpl' => 1,
    'file:_partials/header.tpl' => 1,
    'file:_partials/notifications.tpl' => 1,
    'file:_partials/breadcrumb.tpl' => 1,
    'file:_partials/footer.tpl' => 1,
    'file:_partials/javascript.tpl' => 1,
  ),
),false)) {
function content_63343e3e65bbd9_51496451 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html><html lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
"><head><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19666953263343e3e5ad6d6_58768880', 'head');
$_smarty_tpl->_subTemplateRender("file:_partials/tvcms-javascript-files.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></head><body id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['body_classes'] )), ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['res_1']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['res_1']->value, ENT_QUOTES, 'UTF-8');
}?>  <?php if ($_smarty_tpl->tpl_vars['res_2']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['res_2']->value, ENT_QUOTES, 'UTF-8');
}?>" <?php if (Configuration::get('TVCMSCUSTOMSETTING_ADD_CONTAINER')) {?> style='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayBackgroundBody"),$_smarty_tpl ) );?>
;background-repeat:<?php echo htmlspecialchars(Configuration::get("TVCMSCUSTOMSETTING_BACKGROUND_IMAGE_REPEAT"), ENT_QUOTES, 'UTF-8');?>
;background-attachment:<?php echo htmlspecialchars(Configuration::get("TVCMSCUSTOMSETTING_BACKGROUND_IMAGE_ATTACHMENT"), ENT_QUOTES, 'UTF-8');?>
;' <?php }?> data-mouse-hover-img='<?php echo htmlspecialchars(Configuration::get("TVCMSCUSTOMSETTING_HOVER_IMG"), ENT_QUOTES, 'UTF-8');?>
' data-menu-sticky='<?php echo htmlspecialchars(Configuration::get("TVCMSCUSTOMSETTING_MAIN_MENU_STICKY"), ENT_QUOTES, 'UTF-8');?>
'><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_80175326563343e3e5cd9b5_77316173', 'hook_after_body_opening_tag');
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayThemeOptions'),$_smarty_tpl ) );?>
<main><?php $_smarty_tpl->_subTemplateRender('file:_partials/tvcms-page-loader.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?><div class="tv-main-div <?php if (Configuration::get('TVCMSCUSTOMSETTING_ADD_CONTAINER')) {?>tv-box-layout container<?php }?>" <?php if (Configuration::get('TVCMSCUSTOMSETTING_BODY_BACKGROUND_COLOR_STATUS') == '1') {?>style='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayBodyBackgroundBody"),$_smarty_tpl ) );?>
;background-repeat:<?php echo htmlspecialchars(Configuration::get("TVCMSCUSTOMSETTING_BACKGROUND_IMAGE_REPEAT"), ENT_QUOTES, 'UTF-8');?>
;background-attachment:<?php echo htmlspecialchars(Configuration::get("TVCMSCUSTOMSETTING_BACKGROUND_IMAGE_ATTACHMENT"), ENT_QUOTES, 'UTF-8');?>
;'<?php }?>><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_146260619663343e3e5e12f4_75563062', 'product_activation');
?>
<header id="header"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_199412924863343e3e5e5612_37295117', 'header');
?>
</header><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_191292906163343e3e5e9ff1_46606465', 'notifications');
?>
<div id="wrapper"><div id="wrappertop"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperTop"),$_smarty_tpl ) );?>
</div><div class="container <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] != 'index' || (isset($_smarty_tpl->tpl_vars['page']->value['body_classes']['layout-left-column']))) {?> tv-left-layout<?php } else { ?>tv-full-layout <?php if ((isset($_smarty_tpl->tpl_vars['page']->value['body_classes']['layout-full-width']))) {?>tvcms-full-layout<?php } elseif ((isset($_smarty_tpl->tpl_vars['page']->value['body_classes']['layout-both-columns']))) {?>tvcms-left-right-layout<?php } elseif ((isset($_smarty_tpl->tpl_vars['page']->value['body_classes']['layout-left-column']))) {?>tvcms-left-layout<?php } elseif ((isset($_smarty_tpl->tpl_vars['page']->value['body_classes']['layout-right-column']))) {?>tvcms-right-layout<?php }
}?>"><?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] != 'index') {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_122822689663343e3e604913_54784822', 'breadcrumb');
}?><div class="row"><?php if (!Context::getContext()->isMobile() && !Context::getContext()->isTablet()) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_205612258363343e3e60ee57_69791849', "left_column");
}
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_165969253163343e3e61f285_92525354', "content_wrapper");
if (Context::getContext()->isMobile() || Context::getContext()->isTablet()) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_111335477163343e3e62f5c9_29408080', "left_column");
}
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15535927363343e3e63c019_63263928', "right_column");
?>
</div></div><div class="half-wrapper-backdrop"></div></div><footer id="footer"><?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayNewsLetterPopup"),$_smarty_tpl ) );
}
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_153665194863343e3e64a540_37748339', "footer");
?>
</footer></div></main><div class="full-wrapper-backdrop"></div><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_124768045563343e3e64e5e9_59654661', 'javascript_bottom');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_194635763763343e3e654d89_29677162', 'hook_before_body_closing_tag');
?>
</body></html><?php }
/* {block 'head'} */
class Block_19666953263343e3e5ad6d6_58768880 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_19666953263343e3e5ad6d6_58768880',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_partials/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'head'} */
/* {block 'hook_after_body_opening_tag'} */
class Block_80175326563343e3e5cd9b5_77316173 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_after_body_opening_tag' => 
  array (
    0 => 'Block_80175326563343e3e5cd9b5_77316173',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterBodyOpeningTag'),$_smarty_tpl ) );
}
}
/* {/block 'hook_after_body_opening_tag'} */
/* {block 'product_activation'} */
class Block_146260619663343e3e5e12f4_75563062 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_activation' => 
  array (
    0 => 'Block_146260619663343e3e5e12f4_75563062',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-activation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'product_activation'} */
/* {block 'header'} */
class Block_199412924863343e3e5e5612_37295117 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_199412924863343e3e5e5612_37295117',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_partials/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'header'} */
/* {block 'notifications'} */
class Block_191292906163343e3e5e9ff1_46606465 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications' => 
  array (
    0 => 'Block_191292906163343e3e5e9ff1_46606465',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_partials/notifications.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'notifications'} */
/* {block 'breadcrumb'} */
class Block_122822689663343e3e604913_54784822 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
    0 => 'Block_122822689663343e3e604913_54784822',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_partials/breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'breadcrumb'} */
/* {block "left_column"} */
class Block_205612258363343e3e60ee57_69791849 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_205612258363343e3e60ee57_69791849',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="left-column" class="col-xl-2 col-lg-12 col-md-12 col-sm-12 col-xs-12"><div class="theiaStickySidebar"><?php if (Configuration::get('TVCMSCUSTOMSETTING_FILTER_LEFT_PANEL') == 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFacetedSearchBlock'),$_smarty_tpl ) );
}?><div class='tvleft-column-remove'><div class="tvleft-column-close-btn"></div></div><?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'product') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeftColumnProduct'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayLeftColumn"),$_smarty_tpl ) );
}?></div></div><?php
}
}
/* {/block "left_column"} */
/* {block "content"} */
class Block_121558537363343e3e625ba6_08351823 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<p>Hello world! This is HTML5 Boilerplate.</p><?php
}
}
/* {/block "content"} */
/* {block "content_wrapper"} */
class Block_165969253163343e3e61f285_92525354 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_165969253163343e3e61f285_92525354',
  ),
  'content' => 
  array (
    0 => 'Block_121558537363343e3e625ba6_08351823',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="content-wrapper" class="left-column right-column col-xl-8 col-lg-8 col-md-8 col-sm-8 col-xs-12"><div class="theiaStickySidebar"><?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );
}
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_121558537363343e3e625ba6_08351823', "content", $this->tplIndex);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>
</div></div><?php
}
}
/* {/block "content_wrapper"} */
/* {block "left_column"} */
class Block_111335477163343e3e62f5c9_29408080 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_111335477163343e3e62f5c9_29408080',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="left-column" class="col-xl-2 col-lg-12 col-md-12 col-sm-12 col-xs-12"><div class="theiaStickySidebar"><?php if (Configuration::get('TVCMSCUSTOMSETTING_FILTER_LEFT_PANEL') == 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFacetedSearchBlock'),$_smarty_tpl ) );
}?><div class='tvleft-column-remove'><div class="tvleft-column-close-btn"></div></div><?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'product') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeftColumnProduct'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayLeftColumn"),$_smarty_tpl ) );
}?></div></div><?php
}
}
/* {/block "left_column"} */
/* {block "right_column"} */
class Block_15535927363343e3e63c019_63263928 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_15535927363343e3e63c019_63263928',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="right-column" class="col-xl-2 col-lg-12 col-md-12 col-sm-12 col-xs-12"><div class="theiaStickySidebar"><div class='tvright-column-remove'><div class="tvright-column-close-btn"></div></div><?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'product') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayRightColumnProduct'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayRightColumn"),$_smarty_tpl ) );
}?></div></div><?php
}
}
/* {/block "right_column"} */
/* {block "footer"} */
class Block_153665194863343e3e64a540_37748339 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_153665194863343e3e64a540_37748339',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:_partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "footer"} */
/* {block 'javascript_bottom'} */
class Block_124768045563343e3e64e5e9_59654661 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript_bottom' => 
  array (
    0 => 'Block_124768045563343e3e64e5e9_59654661',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['bottom']), 0, false);
}
}
/* {/block 'javascript_bottom'} */
/* {block 'hook_before_body_closing_tag'} */
class Block_194635763763343e3e654d89_29677162 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_before_body_closing_tag' => 
  array (
    0 => 'Block_194635763763343e3e654d89_29677162',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBeforeBodyClosingTag'),$_smarty_tpl ) );
}
}
/* {/block 'hook_before_body_closing_tag'} */
}
