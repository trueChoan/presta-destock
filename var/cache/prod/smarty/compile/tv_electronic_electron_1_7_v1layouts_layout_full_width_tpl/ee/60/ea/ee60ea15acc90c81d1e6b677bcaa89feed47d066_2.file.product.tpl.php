<?php
/* Smarty version 3.1.43, created on 2022-09-28 14:29:50
  from '/Applications/MAMP/htdocs/cbdestock/themes/tv_electronic_electron_1_7_v1/templates/catalog/product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63343e3e2a85a7_07345283',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee60ea15acc90c81d1e6b677bcaa89feed47d066' => 
    array (
      0 => '/Applications/MAMP/htdocs/cbdestock/themes/tv_electronic_electron_1_7_v1/templates/catalog/product.tpl',
      1 => 1664286346,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/microdata/product-jsonld.tpl' => 1,
    'file:catalog/_partials/product-details.tpl' => 1,
    'file:catalog/_partials/miniatures/product.tpl' => 1,
    'file:catalog/_partials/product-images-modal.tpl' => 1,
    'file:catalog/_partials/product-prices.tpl' => 1,
  ),
),false)) {
function content_63343e3e2a85a7_07345283 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_125813621963343e39309726_34771423', 'head_seo');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_49613695263343e39a649d5_28393421', 'head');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11199288063343e39a876c5_56009671', 'head_microdata_special');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_130527846563343e39b461a4_56759263', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'head_seo'} */
class Block_125813621963343e39309726_34771423 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_seo' => 
  array (
    0 => 'Block_125813621963343e39309726_34771423',
  ),
);
public $prepend = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<link rel="canonical" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['canonical_url'], ENT_QUOTES, 'UTF-8');?>
"><?php
}
}
/* {/block 'head_seo'} */
/* {block 'head'} */
class Block_49613695263343e39a649d5_28393421 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_49613695263343e39a649d5_28393421',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<meta content="width=device-width, initial-scale=1" name="viewport"><meta property="og:type" content="product"><meta property="og:url" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
"><meta property="og:title" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');?>
"><meta property="og:site_name" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"><meta property="og:description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['description'], ENT_QUOTES, 'UTF-8');?>
"><meta property="og:image" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
"><meta property="product:pretax_price:amount" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price_tax_exc'], ENT_QUOTES, 'UTF-8');?>
"><meta property="product:pretax_price:currency" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
"><meta property="product:price:amount" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price_amount'], ENT_QUOTES, 'UTF-8');?>
"><meta property="product:price:currency" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
"><?php if ((isset($_smarty_tpl->tpl_vars['product']->value['weight'])) && ($_smarty_tpl->tpl_vars['product']->value['weight'] != 0)) {?><meta property="product:weight:value" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['weight'], ENT_QUOTES, 'UTF-8');?>
"><meta property="product:weight:units" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['weight_unit'], ENT_QUOTES, 'UTF-8');?>
"><?php }
}
}
/* {/block 'head'} */
/* {block 'head_microdata_special'} */
class Block_11199288063343e39a876c5_56009671 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_microdata_special' => 
  array (
    0 => 'Block_11199288063343e39a876c5_56009671',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_partials/microdata/product-jsonld.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'head_microdata_special'} */
/* {block 'product_description'} */
class Block_181920742063343e3e231238_32997447 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="product-description cms-description"><?php echo $_smarty_tpl->tpl_vars['product']->value['description'];?>
</div><?php
}
}
/* {/block 'product_description'} */
/* {block 'product_details'} */
class Block_165701674463343e3e235201_41007138 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-details.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'product_details'} */
/* {block 'product_attachments'} */
class Block_39947641463343e3e2381e9_63434234 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['product']->value['attachments']) {?><div class="tab-pane fade in" id="attachments" role="tabpanel"><div class="product-attachments"><p class="h5 text-uppercase"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Download','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</p><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['attachments'], 'attachment');
$_smarty_tpl->tpl_vars['attachment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['attachment']->value) {
$_smarty_tpl->tpl_vars['attachment']->do_else = false;
?><div class="attachment"><h4><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'attachment','params'=>array('id_attachment'=>$_smarty_tpl->tpl_vars['attachment']->value['id_attachment'])),$_smarty_tpl ) );?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attachment']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a></h4><p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attachment']->value['description'], ENT_QUOTES, 'UTF-8');?>
</p><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'attachment','params'=>array('id_attachment'=>$_smarty_tpl->tpl_vars['attachment']->value['id_attachment'])),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Download','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
 (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attachment']->value['file_size_formatted'], ENT_QUOTES, 'UTF-8');?>
)</a></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div><?php }
}
}
/* {/block 'product_attachments'} */
/* {block 'product_tabs'} */
class Block_77092920263343e39db3583_27107593 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="tabs tvproduct-description-tab clearfix"><ul class="nav nav-tabs" role="tablist"><?php if ($_smarty_tpl->tpl_vars['product']->value['description']) {?><li class="nav-item" role="presentation"><a class="nav-link<?php if ($_smarty_tpl->tpl_vars['product']->value['description']) {?> active<?php }?>" data-toggle="tab" href="#description" role="tab" aria-controls="description" <?php if ($_smarty_tpl->tpl_vars['product']->value['description']) {?> aria-selected="true" <?php }?>> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Description','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
 </a></li><?php }?><li class="nav-item" role="presentation"><a class="nav-link<?php if (!$_smarty_tpl->tpl_vars['product']->value['description']) {?> active<?php }?>" data-toggle="tab" href="#product-details" role="tab" aria-controls="product-details" <?php if (!$_smarty_tpl->tpl_vars['product']->value['description']) {?> aria-selected="true" <?php }?>> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product Details','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
 </a></li><?php if ($_smarty_tpl->tpl_vars['product']->value['attachments']) {?><li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#attachments" role="tab" aria-controls="attachments"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Attachments','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</a></li><?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['extraContent'], 'extra', false, 'extraKey');
$_smarty_tpl->tpl_vars['extra']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['extraKey']->value => $_smarty_tpl->tpl_vars['extra']->value) {
$_smarty_tpl->tpl_vars['extra']->do_else = false;
?><li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#extra-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extraKey']->value, ENT_QUOTES, 'UTF-8');?>
" role="tab" aria-controls="extra-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extraKey']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extra']->value['title'], ENT_QUOTES, 'UTF-8');?>
</a></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListReviewsTab'),$_smarty_tpl ) );?>
</ul><div class="tab-content clearfix" id="tab-content"><div class="tab-pane fade in <?php if ($_smarty_tpl->tpl_vars['product']->value['description']) {?> active <?php }?>" id="description" role="tabpanel"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_181920742063343e3e231238_32997447', 'product_description', $this->tplIndex);
?>
</div><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_165701674463343e3e235201_41007138', 'product_details', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_39947641463343e3e2381e9_63434234', 'product_attachments', $this->tplIndex);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['extraContent'], 'extra', false, 'extraKey');
$_smarty_tpl->tpl_vars['extra']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['extraKey']->value => $_smarty_tpl->tpl_vars['extra']->value) {
$_smarty_tpl->tpl_vars['extra']->do_else = false;
?><div class="tab-pane fade in <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extra']->value['attr']['class'], ENT_QUOTES, 'UTF-8');?>
" id="extra-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extraKey']->value, ENT_QUOTES, 'UTF-8');?>
" role="tabpanel" <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['extra']->value['attr'], 'val', false, 'key');
$_smarty_tpl->tpl_vars['val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->do_else = false;
?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['val']->value, ENT_QUOTES, 'UTF-8');?>
"<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>><?php echo $_smarty_tpl->tpl_vars['extra']->value['content'];?>
</div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListReviewsTabContent','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>
</div></div><?php
}
}
/* {/block 'product_tabs'} */
/* {block 'product_accessories'} */
class Block_212051240463343e3e2667c1_51186118 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['accessories']->value) {?><div class="tvcmslike-product container-fluid"><div class='tvlike-product-wrapper-box container'><div class='tvcmsmain-title-wrapper'><div class="tvcms-main-title"><div class='tvmain-title'><h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You might also like','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</h2></div></div></div><div class="tvlike-product"><div class="products owl-theme owl-carousel tvlike-product-wrapper tvproduct-wrapper-content-box"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['accessories']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
$_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'tv_product_type'=>"like_product"), 0, true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div><div class='tvlike-pagination-wrapper tv-pagination-wrapper'><div class="tvcmslike-next-pre-btn tvcms-next-pre-btn"><div class="tvcmslike-prev tvcmsprev-btn" data-parent="tvcmslike-product"><i class='material-icons'>&#xe317;</i></div><div class="tvcmslike-next tvcmsnext-btn" data-parent="tvcmslike-product"><i class='material-icons'>&#xe317;</i></div></div></div></div></div><?php }
}
}
/* {/block 'product_accessories'} */
/* {block 'product_footer'} */
class Block_70480846263343e3e272bf2_13441929 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterProduct','product'=>$_smarty_tpl->tpl_vars['product']->value,'category'=>$_smarty_tpl->tpl_vars['category']->value),$_smarty_tpl ) );
}
}
/* {/block 'product_footer'} */
/* {block 'product_images_modal'} */
class Block_80830195963343e3e277220_66918096 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-images-modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'product_images_modal'} */
/* {block 'page_title'} */
class Block_158358462863343e3e290e55_97755237 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'page_title'} */
/* {block 'page_header'} */
class Block_14388398863343e3e28f8b2_63550060 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<h1 class="h1" itemprop="name"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_158358462863343e3e290e55_97755237', 'page_title', $this->tplIndex);
?>
</h1><?php
}
}
/* {/block 'page_header'} */
/* {block 'product_prices'} */
class Block_172890772263343e3e2957c4_53667722 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-prices.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'product_prices'} */
/* {block 'page_footer'} */
class Block_78657368663343e3e29ae99_86018186 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Footer content --><?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_63798678263343e3e27a893_88031556 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if (Configuration::get('TVCMSCUSTOMSETTING_PRODUCT_PAGE_BOTTOM_STICKY_STATUS')) {?><div class="tvfooter-product-sticky-bottom"><div class="container"><div class="tvflex-items"><div class="tvproduct-image-title-price"><?php if ($_smarty_tpl->tpl_vars['product']->value['cover']) {?><div class="product-image"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
" itemprop="image" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['large_default']['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['large_default']['height'], ENT_QUOTES, 'UTF-8');?>
" loading="lazy"></div><div class="tvtitle-price"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14388398863343e3e28f8b2_63550060', 'page_header', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_172890772263343e3e2957c4_53667722', 'product_prices', $this->tplIndex);
?>
</div><?php }?></div><div><div class="product-actions" id="bottom_sticky_data"></div></div></div></div></div><?php }?><footer class="page-footer"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_78657368663343e3e29ae99_86018186', 'page_footer', $this->tplIndex);
?>
</footer><?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_130527846563343e39b461a4_56759263 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_130527846563343e39b461a4_56759263',
  ),
  'product_tabs' => 
  array (
    0 => 'Block_77092920263343e39db3583_27107593',
  ),
  'product_description' => 
  array (
    0 => 'Block_181920742063343e3e231238_32997447',
  ),
  'product_details' => 
  array (
    0 => 'Block_165701674463343e3e235201_41007138',
  ),
  'product_attachments' => 
  array (
    0 => 'Block_39947641463343e3e2381e9_63434234',
  ),
  'product_accessories' => 
  array (
    0 => 'Block_212051240463343e3e2667c1_51186118',
  ),
  'product_footer' => 
  array (
    0 => 'Block_70480846263343e3e272bf2_13441929',
  ),
  'product_images_modal' => 
  array (
    0 => 'Block_80830195963343e3e277220_66918096',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_63798678263343e3e27a893_88031556',
  ),
  'page_header' => 
  array (
    0 => 'Block_14388398863343e3e28f8b2_63550060',
  ),
  'page_title' => 
  array (
    0 => 'Block_158358462863343e3e290e55_97755237',
  ),
  'product_prices' => 
  array (
    0 => 'Block_172890772263343e3e2957c4_53667722',
  ),
  'page_footer' => 
  array (
    0 => 'Block_78657368663343e3e29ae99_86018186',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="main" itemscope itemtype="https://schema.org/Product"><meta itemprop="url" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><div class="tvproduct-page-wrapper"><?php $_smarty_tpl->_assignInScope('prod_layout', "../catalog/".((string)$_smarty_tpl->tpl_vars['TVCMSPRODUCTCUSTOM_LAYOUT']->value).".tpl");
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['prod_layout']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_77092920263343e39db3583_27107593', 'product_tabs', $this->tplIndex);
?>
</div><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_212051240463343e3e2667c1_51186118', 'product_accessories', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_70480846263343e3e272bf2_13441929', 'product_footer', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_80830195963343e3e277220_66918096', 'product_images_modal', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_63798678263343e3e27a893_88031556', 'page_footer_container', $this->tplIndex);
?>
</div><?php
}
}
/* {/block 'content'} */
}
