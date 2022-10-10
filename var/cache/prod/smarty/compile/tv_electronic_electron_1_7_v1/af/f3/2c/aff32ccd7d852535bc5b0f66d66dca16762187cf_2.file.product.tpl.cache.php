<?php
/* Smarty version 3.1.43, created on 2022-09-28 14:29:52
  from '/Applications/MAMP/htdocs/cbdestock/modules/tvcmsproductpopup/views/templates/hook/product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63343e40ce9012_86100103',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aff32ccd7d852535bc5b0f66d66dca16762187cf' => 
    array (
      0 => '/Applications/MAMP/htdocs/cbdestock/modules/tvcmsproductpopup/views/templates/hook/product.tpl',
      1 => 1664286345,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product-timer.tpl' => 1,
  ),
),false)) {
function content_63343e40ce9012_86100103 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '192029550863343e40c1d784_62534897';
?>
    <div class="tvproduct-wrapper bottom-to-top hb-animate-element"><span class="tvprodpopup-close"><i class="material-icons">&#xe5cd;</i></span><?php $_smarty_tpl->_assignInScope('image_size', "side_product_default");
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_22888776763343e40c4ff95_83519111', 'product_thumbnail');
?>
<div class="tvproduct-info-box-wrapper"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReviewProductList','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>
<div class="tvproduct-name product-title"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><h6><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</h6></a></div><?php if (!empty($_smarty_tpl->tpl_vars['product']->value['specific_prices']['from']) && !empty($_smarty_tpl->tpl_vars['product']->value['specific_prices']['to']) && $_smarty_tpl->tpl_vars['product']->value['specific_prices']['from'] != '0000-00-00 00:00:00' && $_smarty_tpl->tpl_vars['product']->value['specific_prices']['to'] != '0000-00-00 00:00:00') {
$_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product-timer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('timer'=>$_smarty_tpl->tpl_vars['product']->value['specific_prices']['to']), 0, false);
}
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_198891722863343e40cb34e8_12413686', 'product_price_and_shipping');
if ($_smarty_tpl->tpl_vars['product']->value['main_variants']) {?><div class="tv-product-price-info-box"><div class='tvcmsstock-indicator-wraper'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListStockIndicator','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>
</div><div class='tvproduct-color-wrapper'><?php if ($_smarty_tpl->tpl_vars['product']->value['main_variants']) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5908188163343e40cc6235_88950064', 'product_variants');
}?></div></div><?php }?></div></div><?php }
/* {block 'product_flags'} */
class Block_150974648363343e40c968b4_56838760 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<ul class="product-flags tvproduct-online-new-wrapper"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
$_smarty_tpl->tpl_vars['flag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
$_smarty_tpl->tpl_vars['flag']->do_else = false;
?><li class="product-flag <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul><?php
}
}
/* {/block 'product_flags'} */
/* {block 'product_thumbnail'} */
class Block_22888776763343e40c4ff95_83519111 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_thumbnail' => 
  array (
    0 => 'Block_22888776763343e40c4ff95_83519111',
  ),
  'product_flags' => 
  array (
    0 => 'Block_150974648363343e40c968b4_56838760',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="tvproduct-image"><?php if ($_smarty_tpl->tpl_vars['product']->value['cover']) {?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize'][$_smarty_tpl->tpl_vars['image_size']->value]['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['cover']['legend'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}?>" class="tvproduct-defult-img tv-img-responsive" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize'][$_smarty_tpl->tpl_vars['image_size']->value]['height'], ENT_QUOTES, 'UTF-8');?>
" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize'][$_smarty_tpl->tpl_vars['image_size']->value]['width'], ENT_QUOTES, 'UTF-8');?>
" loading="lazy"><?php if (Configuration::get('TVCMSCUSTOMSETTING_HOVER_IMG')) {
if ((isset($_smarty_tpl->tpl_vars['product']->value['images'][0]['bySize'][$_smarty_tpl->tpl_vars['image_size']->value]['url'])) && empty($_smarty_tpl->tpl_vars['product']->value['images'][0]['cover'])) {?><img class="tvproduct-hover-img tv-img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['images'][0]['bySize'][$_smarty_tpl->tpl_vars['image_size']->value]['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['images'][0]['bySize'][$_smarty_tpl->tpl_vars['image_size']->value]['height'], ENT_QUOTES, 'UTF-8');?>
" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['images'][0]['bySize'][$_smarty_tpl->tpl_vars['image_size']->value]['width'], ENT_QUOTES, 'UTF-8');?>
" loading="lazy"><?php } elseif ((isset($_smarty_tpl->tpl_vars['product']->value['images'][1]['bySize'][$_smarty_tpl->tpl_vars['image_size']->value]['url'])) && empty($_smarty_tpl->tpl_vars['product']->value['images'][1]['cover'])) {?><img class="tvproduct-hover-img tv-img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['images'][1]['bySize'][$_smarty_tpl->tpl_vars['image_size']->value]['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['images'][1]['bySize'][$_smarty_tpl->tpl_vars['image_size']->value]['height'], ENT_QUOTES, 'UTF-8');?>
" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['images'][1]['bySize'][$_smarty_tpl->tpl_vars['image_size']->value]['width'], ENT_QUOTES, 'UTF-8');?>
" loading="lazy"><?php }
}?></a><?php } else { ?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize'][$_smarty_tpl->tpl_vars['image_size']->value]['url'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize'][$_smarty_tpl->tpl_vars['image_size']->value]['height'], ENT_QUOTES, 'UTF-8');?>
" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize'][$_smarty_tpl->tpl_vars['image_size']->value]['width'], ENT_QUOTES, 'UTF-8');?>
" loading="lazy"></a><?php }
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_150974648363343e40c968b4_56838760', 'product_flags', $this->tplIndex);
?>
</div><?php
}
}
/* {/block 'product_thumbnail'} */
/* {block 'product_price_and_shipping'} */
class Block_198891722863343e40cb34e8_12413686 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_price_and_shipping' => 
  array (
    0 => 'Block_198891722863343e40cb34e8_12413686',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="tv-product-price"><?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?><div class="product-price-and-shipping"><span class="price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span><?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?><span class="regular-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span><?php }
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl ) );?>
</div><?php }?></div><?php
}
}
/* {/block 'product_price_and_shipping'} */
/* {block 'product_variants'} */
class Block_5908188163343e40cc6235_88950064 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_variants' => 
  array (
    0 => 'Block_5908188163343e40cc6235_88950064',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('isMore', 4);
$_smarty_tpl->_assignInScope('colorCount', 0);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['main_variants'], 'color_info');
$_smarty_tpl->tpl_vars['color_info']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['color_info']->value) {
$_smarty_tpl->tpl_vars['color_info']->do_else = false;
if ($_smarty_tpl->tpl_vars['isMore']->value == $_smarty_tpl->tpl_vars['colorCount']->value && $_smarty_tpl->tpl_vars['isMore']->value < count($_smarty_tpl->tpl_vars['product']->value['main_variants'])) {?> <a href="javascript:void(0)" class='tvcmsmorecolor-icon' title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product Color','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
"><?php echo htmlspecialchars((count($_smarty_tpl->tpl_vars['product']->value['main_variants'])-4), ENT_QUOTES, 'UTF-8');?>
<i class='material-icons'>&#xe145</i></a><span class="tvcmsmorecolor"><?php }
$_smarty_tpl->_assignInScope('colorCount', $_smarty_tpl->tpl_vars['colorCount']->value+1);?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['color_info']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class='tvporoduct-color-box' style='<?php if ($_smarty_tpl->tpl_vars['color_info']->value['html_color_code'] != '') {?>background-color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['color_info']->value['html_color_code'], ENT_QUOTES, 'UTF-8');?>
;<?php } else { ?>background-image: url(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['color_info']->value['texture'], ENT_QUOTES, 'UTF-8');?>
);<?php }?>' title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product Color','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
"></a><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ($_smarty_tpl->tpl_vars['isMore']->value < $_smarty_tpl->tpl_vars['colorCount']->value) {?> <a href="javascript:void(0)" class='tvcmslesscolor-icon'><i class='material-icons'>&#xe15b</i></a></span><?php }
}
}
/* {/block 'product_variants'} */
}
