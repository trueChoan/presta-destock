<?php
/* Smarty version 3.1.43, created on 2022-09-28 14:31:56
  from '/Applications/MAMP/htdocs/cbdestock/themes/tv_electronic_electron_1_7_v1/templates/_partials/head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63343ebc7c9cf2_48969291',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c13421fafdd318a840ee34535cb8f1569d9279c' => 
    array (
      0 => '/Applications/MAMP/htdocs/cbdestock/themes/tv_electronic_electron_1_7_v1/templates/_partials/head.tpl',
      1 => 1664286346,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/microdata/head-jsonld.tpl' => 1,
    'file:_partials/pagination-seo.tpl' => 1,
    'file:_partials/stylesheets.tpl' => 1,
    'file:_partials/javascript.tpl' => 1,
  ),
),false)) {
function content_63343ebc7c9cf2_48969291 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_180256649863343ebc6d0e61_82691470', 'head_charset');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_176099687763343ebc6d3318_12741938', 'head_ie_compatibility');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_46747766763343ebc6d5506_46210045', 'head_seo');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_63060372963343ebc791309_01258341', 'head_viewport');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_87620071763343ebc793758_90180694', 'head_icons');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_81602911663343ebc79d054_65119268', 'stylesheets');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_119640400063343ebc7a1ed7_69543772', 'javascript_head');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_110484933563343ebc7a7716_72256672', 'hook_header');
?>
<link rel="dns-prefetch" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['shop_domain_url'], ENT_QUOTES, 'UTF-8');?>
" /><link rel="preconnect" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['shop_domain_url'], ENT_QUOTES, 'UTF-8');?>
" crossorigin /><link rel="preload" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['css_url'], ENT_QUOTES, 'UTF-8');?>
570eb83859dc23dd0eec423a49e147fe.woff2" as="font" type="font/woff2" crossorigin /><link rel="preload" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['css_url'], ENT_QUOTES, 'UTF-8');?>
../fonts/roboto/KFOlCnqEu92Fr1MmYUtfBBc4.woff2" as="font" type="font/woff2" crossorigin /><link rel="preload" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['css_url'], ENT_QUOTES, 'UTF-8');?>
../fonts/roboto-condensed/ieVl2ZhZI2eCN5jzbjEETS9weq8-19K7DQ.woff2" as="font" type="font/woff2" crossorigin media='(min-width: 992px)' /><link as="style" rel="stylesheet preload" type="text/css" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['css_url'], ENT_QUOTES, 'UTF-8');?>
material-fonts.css" /><link as="style" rel="stylesheet preload" type="text/css" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['css_url'], ENT_QUOTES, 'UTF-8');?>
roboto.css" /><link as="style" rel="stylesheet preload" type="text/css" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['css_url'], ENT_QUOTES, 'UTF-8');?>
roboto-condensed.css" media='(min-width: 992px)' /><?php if ($_smarty_tpl->tpl_vars['ArabicFontStatus']->value) {?><link type="text/css" rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['css_url'], ENT_QUOTES, 'UTF-8');?>
iran-yekan.css" media="all"><style type="text/css">body.lang-rtl,body.lang-rtl p,body.lang-rtl h1,body.lang-rtl h2,body.lang-rtl h3,body.lang-rtl h4,body.lang-rtl h5,body.lang-rtl h6,body.lang-rtl span,body.lang-rtl div {font-family: 'iran-yekan' !important;}</style><?php }
if (Configuration::get('TVCMSCUSTOMSETTING_DARK_MODE_INPUT')) {?><link rel="stylesheet" class="dark-theme-css-r" type="text/css" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['css_url'], ENT_QUOTES, 'UTF-8');?>
dark-theme.css"><?php }
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_25692862663343ebc7c53b5_74410054', 'hook_extra');
}
/* {block 'head_charset'} */
class Block_180256649863343ebc6d0e61_82691470 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_charset' => 
  array (
    0 => 'Block_180256649863343ebc6d0e61_82691470',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<meta charset="utf-8"><?php
}
}
/* {/block 'head_charset'} */
/* {block 'head_ie_compatibility'} */
class Block_176099687763343ebc6d3318_12741938 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_ie_compatibility' => 
  array (
    0 => 'Block_176099687763343ebc6d3318_12741938',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<meta http-equiv="x-ua-compatible" content="ie=edge"><?php
}
}
/* {/block 'head_ie_compatibility'} */
/* {block 'head_microdata'} */
class Block_2528264063343ebc6d6995_12869309 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:_partials/microdata/head-jsonld.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'head_microdata'} */
/* {block 'head_microdata_special'} */
class Block_174123172963343ebc6da925_74059310 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'head_microdata_special'} */
/* {block 'head_pagination_seo'} */
class Block_34249510763343ebc6dc657_29051094 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:_partials/pagination-seo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'head_pagination_seo'} */
/* {block 'head_seo_title'} */
class Block_164958940563343ebc6e0393_27838800 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'head_seo_title'} */
/* {block 'hook_after_title_tag'} */
class Block_123638551163343ebc6e3c93_36956431 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterTitleTag'),$_smarty_tpl ) );
}
}
/* {/block 'hook_after_title_tag'} */
/* {block 'head_seo_description'} */
class Block_171333257763343ebc6e6aa4_05775124 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['description'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'head_seo_description'} */
/* {block 'head_seo_keywords'} */
class Block_71849824063343ebc6ea278_73627882 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['keywords'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'head_seo_keywords'} */
/* {block 'head_hreflang'} */
class Block_194329648463343ebc6f9da8_25780681 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['urls']->value['alternative_langs'], 'pageUrl', false, 'code');
$_smarty_tpl->tpl_vars['pageUrl']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['code']->value => $_smarty_tpl->tpl_vars['pageUrl']->value) {
$_smarty_tpl->tpl_vars['pageUrl']->do_else = false;
?><link rel="alternate" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pageUrl']->value, ENT_QUOTES, 'UTF-8');?>
" hreflang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
"><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
/* {/block 'head_hreflang'} */
/* {block 'head_open_graph'} */
class Block_59454619263343ebc77f0e0_24968295 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<meta property="og:title" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');?>
" /><meta property="og:description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['description'], ENT_QUOTES, 'UTF-8');?>
" /><meta property="og:url" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
" /><meta property="og:site_name" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
" /><?php if (!(isset($_smarty_tpl->tpl_vars['product']->value)) && $_smarty_tpl->tpl_vars['page']->value['page_name'] != 'product') {?><meta property="og:type" content="website" /><?php }
}
}
/* {/block 'head_open_graph'} */
/* {block 'head_seo'} */
class Block_46747766763343ebc6d5506_46210045 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_seo' => 
  array (
    0 => 'Block_46747766763343ebc6d5506_46210045',
  ),
  'head_microdata' => 
  array (
    0 => 'Block_2528264063343ebc6d6995_12869309',
  ),
  'head_microdata_special' => 
  array (
    0 => 'Block_174123172963343ebc6da925_74059310',
  ),
  'head_pagination_seo' => 
  array (
    0 => 'Block_34249510763343ebc6dc657_29051094',
  ),
  'head_seo_title' => 
  array (
    0 => 'Block_164958940563343ebc6e0393_27838800',
  ),
  'hook_after_title_tag' => 
  array (
    0 => 'Block_123638551163343ebc6e3c93_36956431',
  ),
  'head_seo_description' => 
  array (
    0 => 'Block_171333257763343ebc6e6aa4_05775124',
  ),
  'head_seo_keywords' => 
  array (
    0 => 'Block_71849824063343ebc6ea278_73627882',
  ),
  'head_hreflang' => 
  array (
    0 => 'Block_194329648463343ebc6f9da8_25780681',
  ),
  'head_open_graph' => 
  array (
    0 => 'Block_59454619263343ebc77f0e0_24968295',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2528264063343ebc6d6995_12869309', 'head_microdata', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_174123172963343ebc6da925_74059310', 'head_microdata_special', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_34249510763343ebc6dc657_29051094', 'head_pagination_seo', $this->tplIndex);
?>
<title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_164958940563343ebc6e0393_27838800', 'head_seo_title', $this->tplIndex);
?>
</title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_123638551163343ebc6e3c93_36956431', 'hook_after_title_tag', $this->tplIndex);
?>
<meta name="description" content="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_171333257763343ebc6e6aa4_05775124', 'head_seo_description', $this->tplIndex);
?>
"><meta name="keywords" content="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_71849824063343ebc6ea278_73627882', 'head_seo_keywords', $this->tplIndex);
?>
"><?php if ($_smarty_tpl->tpl_vars['page']->value['meta']['robots'] !== 'index') {?><meta name="AdsBot-Google" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['robots'], ENT_QUOTES, 'UTF-8');?>
"><?php }
if ($_smarty_tpl->tpl_vars['page']->value['canonical']) {?><link rel="canonical" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['canonical'], ENT_QUOTES, 'UTF-8');?>
"><?php }
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_194329648463343ebc6f9da8_25780681', 'head_hreflang', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_59454619263343ebc77f0e0_24968295', 'head_open_graph', $this->tplIndex);
}
}
/* {/block 'head_seo'} */
/* {block 'head_viewport'} */
class Block_63060372963343ebc791309_01258341 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_viewport' => 
  array (
    0 => 'Block_63060372963343ebc791309_01258341',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<meta name="viewport" content="width=device-width, initial-scale=1"><?php
}
}
/* {/block 'head_viewport'} */
/* {block 'head_icons'} */
class Block_87620071763343ebc793758_90180694 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_icons' => 
  array (
    0 => 'Block_87620071763343ebc793758_90180694',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon'], ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon_update_time'], ENT_QUOTES, 'UTF-8');?>
"><link rel="shortcut icon" type="image/x-icon" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon'], ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon_update_time'], ENT_QUOTES, 'UTF-8');?>
"><?php
}
}
/* {/block 'head_icons'} */
/* {block 'stylesheets'} */
class Block_81602911663343ebc79d054_65119268 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'stylesheets' => 
  array (
    0 => 'Block_81602911663343ebc79d054_65119268',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:_partials/stylesheets.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('stylesheets'=>$_smarty_tpl->tpl_vars['stylesheets']->value), 0, false);
}
}
/* {/block 'stylesheets'} */
/* {block 'javascript_head'} */
class Block_119640400063343ebc7a1ed7_69543772 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript_head' => 
  array (
    0 => 'Block_119640400063343ebc7a1ed7_69543772',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['head'],'vars'=>$_smarty_tpl->tpl_vars['js_custom_vars']->value), 0, false);
}
}
/* {/block 'javascript_head'} */
/* {block 'hook_header'} */
class Block_110484933563343ebc7a7716_72256672 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_header' => 
  array (
    0 => 'Block_110484933563343ebc7a7716_72256672',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['HOOK_HEADER']->value;
}
}
/* {/block 'hook_header'} */
/* {block 'hook_extra'} */
class Block_25692862663343ebc7c53b5_74410054 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_extra' => 
  array (
    0 => 'Block_25692862663343ebc7c53b5_74410054',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'hook_extra'} */
}
