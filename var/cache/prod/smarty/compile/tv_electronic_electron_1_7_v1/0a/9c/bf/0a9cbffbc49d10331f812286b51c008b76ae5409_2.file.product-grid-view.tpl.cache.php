<?php
/* Smarty version 3.1.43, created on 2022-09-28 14:30:03
  from '/Applications/MAMP/htdocs/cbdestock/themes/tv_electronic_electron_1_7_v1/templates/catalog/_partials/miniatures/product-grid-view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63343e4b0fabb8_17031922',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a9cbffbc49d10331f812286b51c008b76ae5409' => 
    array (
      0 => '/Applications/MAMP/htdocs/cbdestock/themes/tv_electronic_electron_1_7_v1/templates/catalog/_partials/miniatures/product-grid-view.tpl',
      1 => 1664286346,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product-timer.tpl' => 1,
  ),
),false)) {
function content_63343e4b0fabb8_17031922 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '203566507563343e4b0439b5_92702670';
?>
    <div class="tvproduct-wrapper <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class_name']->value, ENT_QUOTES, 'UTF-8');?>
"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_48436365163343e4b04d726_70864708', 'product_thumbnail');
?>
<div class="tvproduct-info-box-wrapper"><div class="product-description"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReviewProductList','product'=>$_smarty_tpl->tpl_vars['product']->value,'productType'=>((string)$_smarty_tpl->tpl_vars['class_name']->value)),$_smarty_tpl ) );
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_105403696963343e4b0e5169_70060543', 'product_name');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_102535559963343e4b0eb677_81889660', 'product_price_and_shipping');
?>
</div></div></div><?php }
/* {block 'product_flags'} */
class Block_141054685963343e4b092510_42629259 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<ul class="tvproduct-flags tvproduct-online-new-wrapper"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
$_smarty_tpl->tpl_vars['flag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
$_smarty_tpl->tpl_vars['flag']->do_else = false;
if ($_smarty_tpl->tpl_vars['flag']->value['type'] == 'online-only' || $_smarty_tpl->tpl_vars['flag']->value['type'] == 'new') {?><li class="product-flag <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul><ul class="tvproduct-flags tvproduct-sale-pack-wrapper"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
$_smarty_tpl->tpl_vars['flag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
$_smarty_tpl->tpl_vars['flag']->do_else = false;
if ($_smarty_tpl->tpl_vars['flag']->value['type'] == 'on-sale' || $_smarty_tpl->tpl_vars['flag']->value['type'] == 'pack') {?><li class="product-flag <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul><?php
}
}
/* {/block 'product_flags'} */
/* {block 'quick_view'} */
class Block_147807675163343e4b0baa83_29257178 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<a class="quick-view" href="#" data-link-action="quickview" data-toggle="tvtooltip" data-placement="top" data-html="true" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quick View','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quick View','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"><div class="tvproduct-quick-icon"><i class="material-icons search">&#xE8B6;</i></div></a><?php
}
}
/* {/block 'quick_view'} */
/* {block 'product_thumbnail'} */
class Block_48436365163343e4b04d726_70864708 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_thumbnail' => 
  array (
    0 => 'Block_48436365163343e4b04d726_70864708',
  ),
  'product_flags' => 
  array (
    0 => 'Block_141054685963343e4b092510_42629259',
  ),
  'quick_view' => 
  array (
    0 => 'Block_147807675163343e4b0baa83_29257178',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="tvproduct-image"><?php if ($_smarty_tpl->tpl_vars['product']->value['cover']) {?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail" itemprop="url"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize'][$_smarty_tpl->tpl_vars['image_size']->value]['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['cover']['legend'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}?>" class="tvproduct-defult-img tv-img-responsive" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize'][$_smarty_tpl->tpl_vars['image_size']->value]['height'], ENT_QUOTES, 'UTF-8');?>
" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize'][$_smarty_tpl->tpl_vars['image_size']->value]['width'], ENT_QUOTES, 'UTF-8');?>
" itemprop="image" loading="lazy"><?php if (Configuration::get('TVCMSCUSTOMSETTING_HOVER_IMG')) {
if ((isset($_smarty_tpl->tpl_vars['product']->value['images'][0]['bySize'][$_smarty_tpl->tpl_vars['image_size']->value]['url'])) && empty($_smarty_tpl->tpl_vars['product']->value['images'][0]['cover'])) {?><img class="tvproduct-hover-img tv-img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['images'][0]['bySize'][$_smarty_tpl->tpl_vars['image_size']->value]['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['images'][0]['bySize'][$_smarty_tpl->tpl_vars['image_size']->value]['height'], ENT_QUOTES, 'UTF-8');?>
" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['images'][0]['bySize'][$_smarty_tpl->tpl_vars['image_size']->value]['width'], ENT_QUOTES, 'UTF-8');?>
" itemprop="image" loading="lazy"><?php } elseif ((isset($_smarty_tpl->tpl_vars['product']->value['images'][1]['bySize'][$_smarty_tpl->tpl_vars['image_size']->value]['url'])) && empty($_smarty_tpl->tpl_vars['product']->value['images'][1]['cover'])) {
ob_start();
echo htmlspecialchars(Configuration::get('TVCMSCUSTOMSETTING_HOVER_IMG') != '0', ENT_QUOTES, 'UTF-8');
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1) {?><img class="tvproduct-hover-img tv-img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['images'][1]['bySize'][$_smarty_tpl->tpl_vars['image_size']->value]['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['images'][1]['bySize'][$_smarty_tpl->tpl_vars['image_size']->value]['height'], ENT_QUOTES, 'UTF-8');?>
" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['images'][1]['bySize'][$_smarty_tpl->tpl_vars['image_size']->value]['width'], ENT_QUOTES, 'UTF-8');?>
" itemprop="image" loading="lazy"><?php }
}
}?></a><?php } else { ?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ImgDir']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['iso_code']->value, ENT_QUOTES, 'UTF-8');?>
-default-home_default.jpg" itemprop="image" class="tv-img-responsive" loading="lazy"></a><?php }
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_141054685963343e4b092510_42629259', 'product_flags', $this->tplIndex);
if (!empty($_smarty_tpl->tpl_vars['product']->value['specific_prices']['from']) && !empty($_smarty_tpl->tpl_vars['product']->value['specific_prices']['to']) && $_smarty_tpl->tpl_vars['product']->value['specific_prices']['from'] != '0000-00-00 00:00:00' && $_smarty_tpl->tpl_vars['product']->value['specific_prices']['to'] != '0000-00-00 00:00:00') {
$_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product-timer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('timer'=>$_smarty_tpl->tpl_vars['product']->value['specific_prices']['to']), 0, false);
}?><div class='tvproduct-hover-btn'><div class=" tvproduct-quick-btn"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_147807675163343e4b0baa83_29257178', 'quick_view', $this->tplIndex);
?>
</div><div class="tvproduct-cart-btn"><form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" method="post"><input type="hidden" name="id_product" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
"><input type="hidden" name="qty" value="1"><?php if (!empty($_smarty_tpl->tpl_vars['product']->value['is_customizable']) && count($_smarty_tpl->tpl_vars['product']->value['customizations']['fields'])) {?><input type="hidden" name="id_customization" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_customization'], ENT_QUOTES, 'UTF-8');?>
" id="product_customization_id"><?php }?><input type="hidden" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
"><button data-button-action="add-to-cart" type="submit" class="btn add-to-cart tvproduct-add-to-cart <?php if (!$_smarty_tpl->tpl_vars['product']->value['add_to_cart_url']) {?>tvproduct-out-of-stock disable<?php }?>" <?php if (!$_smarty_tpl->tpl_vars['product']->value['add_to_cart_url']) {?>disabled<?php }?> data-toggle="tvtooltip" data-placement="top" data-html="true" data-original-title="<?php if (!$_smarty_tpl->tpl_vars['product']->value['add_to_cart_url']) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Out Of Stock','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add To Cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );
}?>"><i class='material-icons add-cart'>&#xe8cc;</i><i class='material-icons out-of-stock hide'>&#xe611;</i></button></form></div><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductCompareProductList','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayWishlistBtnProductList','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>
</div></div><?php
}
}
/* {/block 'product_thumbnail'} */
/* {block 'product_name'} */
class Block_105403696963343e4b0e5169_70060543 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_name' => 
  array (
    0 => 'Block_105403696963343e4b0e5169_70060543',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="tvproduct-name product-title"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><h6 itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</h6></a></div><?php
}
}
/* {/block 'product_name'} */
/* {block 'product_price_and_shipping'} */
class Block_102535559963343e4b0eb677_81889660 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_price_and_shipping' => 
  array (
    0 => 'Block_102535559963343e4b0eb677_81889660',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="tv-product-price tvproduct-name-price-wrapper"><?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?><div class="product-price-and-shipping"><meta itemprop="sku" content="1234" /><meta itemprop="mpn" content="1234" /><meta itemprop="brand" content="fashion" /><span class="price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span><?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?><span class="regular-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span><?php }
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl ) );?>
</div><?php }?></div><?php
}
}
/* {/block 'product_price_and_shipping'} */
}
