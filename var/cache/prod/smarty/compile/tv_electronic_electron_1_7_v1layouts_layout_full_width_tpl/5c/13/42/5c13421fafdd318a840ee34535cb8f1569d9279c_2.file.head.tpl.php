<?php
/* Smarty version 3.1.43, created on 2022-09-28 14:29:50
  from '/Applications/MAMP/htdocs/cbdestock/themes/tv_electronic_electron_1_7_v1/templates/_partials/head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63343e3e790d60_72529929',
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
function content_63343e3e790d60_72529929 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_60750089063343e3e6ff719_48158751', 'head_charset');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_190261705863343e3e702196_94557633', 'head_ie_compatibility');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_48365040663343e3e706760_36109563', 'head_seo');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_193684383763343e3e7557c7_51625646', 'head_viewport');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_25263269963343e3e75a6b5_14031251', 'head_icons');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_50527218663343e3e764070_25485855', 'stylesheets');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_48703887063343e3e769580_84162926', 'javascript_head');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_125274651163343e3e76f707_22239971', 'hook_header');
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_143976193863343e3e78bdb8_45213033', 'hook_extra');
}
/* {block 'head_charset'} */
class Block_60750089063343e3e6ff719_48158751 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_charset' => 
  array (
    0 => 'Block_60750089063343e3e6ff719_48158751',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<meta charset="utf-8"><?php
}
}
/* {/block 'head_charset'} */
/* {block 'head_ie_compatibility'} */
class Block_190261705863343e3e702196_94557633 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_ie_compatibility' => 
  array (
    0 => 'Block_190261705863343e3e702196_94557633',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<meta http-equiv="x-ua-compatible" content="ie=edge"><?php
}
}
/* {/block 'head_ie_compatibility'} */
/* {block 'head_microdata'} */
class Block_48017224463343e3e707db3_98061033 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:_partials/microdata/head-jsonld.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'head_microdata'} */
/* {block 'head_microdata_special'} */
class Block_201286678363343e3e70bef4_01851685 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'head_microdata_special'} */
/* {block 'head_pagination_seo'} */
class Block_115660288263343e3e70dc79_96635821 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:_partials/pagination-seo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'head_pagination_seo'} */
/* {block 'head_seo_title'} */
class Block_96856410663343e3e711bf1_69606945 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'head_seo_title'} */
/* {block 'hook_after_title_tag'} */
class Block_26283159363343e3e715af2_11490011 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterTitleTag'),$_smarty_tpl ) );
}
}
/* {/block 'hook_after_title_tag'} */
/* {block 'head_seo_description'} */
class Block_129232626363343e3e71d312_15151388 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['description'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'head_seo_description'} */
/* {block 'head_seo_keywords'} */
class Block_144469859363343e3e723c15_36377187 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['keywords'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'head_seo_keywords'} */
/* {block 'head_hreflang'} */
class Block_184220606563343e3e734a10_57671969 extends Smarty_Internal_Block
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
class Block_68746408463343e3e73e302_76902034 extends Smarty_Internal_Block
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
class Block_48365040663343e3e706760_36109563 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_seo' => 
  array (
    0 => 'Block_48365040663343e3e706760_36109563',
  ),
  'head_microdata' => 
  array (
    0 => 'Block_48017224463343e3e707db3_98061033',
  ),
  'head_microdata_special' => 
  array (
    0 => 'Block_201286678363343e3e70bef4_01851685',
  ),
  'head_pagination_seo' => 
  array (
    0 => 'Block_115660288263343e3e70dc79_96635821',
  ),
  'head_seo_title' => 
  array (
    0 => 'Block_96856410663343e3e711bf1_69606945',
  ),
  'hook_after_title_tag' => 
  array (
    0 => 'Block_26283159363343e3e715af2_11490011',
  ),
  'head_seo_description' => 
  array (
    0 => 'Block_129232626363343e3e71d312_15151388',
  ),
  'head_seo_keywords' => 
  array (
    0 => 'Block_144469859363343e3e723c15_36377187',
  ),
  'head_hreflang' => 
  array (
    0 => 'Block_184220606563343e3e734a10_57671969',
  ),
  'head_open_graph' => 
  array (
    0 => 'Block_68746408463343e3e73e302_76902034',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_48017224463343e3e707db3_98061033', 'head_microdata', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_201286678363343e3e70bef4_01851685', 'head_microdata_special', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_115660288263343e3e70dc79_96635821', 'head_pagination_seo', $this->tplIndex);
?>
<title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_96856410663343e3e711bf1_69606945', 'head_seo_title', $this->tplIndex);
?>
</title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_26283159363343e3e715af2_11490011', 'hook_after_title_tag', $this->tplIndex);
?>
<meta name="description" content="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_129232626363343e3e71d312_15151388', 'head_seo_description', $this->tplIndex);
?>
"><meta name="keywords" content="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_144469859363343e3e723c15_36377187', 'head_seo_keywords', $this->tplIndex);
?>
"><?php if ($_smarty_tpl->tpl_vars['page']->value['meta']['robots'] !== 'index') {?><meta name="AdsBot-Google" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['robots'], ENT_QUOTES, 'UTF-8');?>
"><?php }
if ($_smarty_tpl->tpl_vars['page']->value['canonical']) {?><link rel="canonical" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['canonical'], ENT_QUOTES, 'UTF-8');?>
"><?php }
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_184220606563343e3e734a10_57671969', 'head_hreflang', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_68746408463343e3e73e302_76902034', 'head_open_graph', $this->tplIndex);
}
}
/* {/block 'head_seo'} */
/* {block 'head_viewport'} */
class Block_193684383763343e3e7557c7_51625646 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_viewport' => 
  array (
    0 => 'Block_193684383763343e3e7557c7_51625646',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<meta name="viewport" content="width=device-width, initial-scale=1"><?php
}
}
/* {/block 'head_viewport'} */
/* {block 'head_icons'} */
class Block_25263269963343e3e75a6b5_14031251 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_icons' => 
  array (
    0 => 'Block_25263269963343e3e75a6b5_14031251',
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
class Block_50527218663343e3e764070_25485855 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'stylesheets' => 
  array (
    0 => 'Block_50527218663343e3e764070_25485855',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:_partials/stylesheets.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('stylesheets'=>$_smarty_tpl->tpl_vars['stylesheets']->value), 0, false);
}
}
/* {/block 'stylesheets'} */
/* {block 'javascript_head'} */
class Block_48703887063343e3e769580_84162926 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript_head' => 
  array (
    0 => 'Block_48703887063343e3e769580_84162926',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['head'],'vars'=>$_smarty_tpl->tpl_vars['js_custom_vars']->value), 0, false);
}
}
/* {/block 'javascript_head'} */
/* {block 'hook_header'} */
class Block_125274651163343e3e76f707_22239971 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_header' => 
  array (
    0 => 'Block_125274651163343e3e76f707_22239971',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['HOOK_HEADER']->value;
}
}
/* {/block 'hook_header'} */
/* {block 'hook_extra'} */
class Block_143976193863343e3e78bdb8_45213033 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_extra' => 
  array (
    0 => 'Block_143976193863343e3e78bdb8_45213033',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'hook_extra'} */
}
