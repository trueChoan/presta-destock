<?php
/* Smarty version 3.1.43, created on 2022-09-28 14:29:58
  from '/Applications/MAMP/htdocs/cbdestock/themes/tv_electronic_electron_1_7_v1/templates/catalog/product-1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63343e46c40692_00319902',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '557046e6e6e440ec45117c2538e11da23173481e' => 
    array (
      0 => '/Applications/MAMP/htdocs/cbdestock/themes/tv_electronic_electron_1_7_v1/templates/catalog/product-1.tpl',
      1 => 1664286346,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/product-cover-thumbnails.tpl' => 1,
    'file:catalog/_partials/product-prices.tpl' => 1,
    'file:catalog/_partials/miniatures/product-timer.tpl' => 1,
    'file:catalog/_partials/product-customization.tpl' => 1,
    'file:catalog/_partials/product-variants.tpl' => 1,
    'file:catalog/_partials/miniatures/pack-product.tpl' => 1,
    'file:catalog/_partials/product-discounts.tpl' => 1,
    'file:catalog/_partials/product-add-to-cart.tpl' => 1,
  ),
),false)) {
function content_63343e46c40692_00319902 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="tvprduct-image-info-wrapper clearfix row product-1" data-product-layout="1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductTabVideo'),$_smarty_tpl ) );?>
<div class="col-md-6 tv-product-page-image"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_138803383263343e46bdbdc1_56189176', 'product_cover_thumbnails');
?>
</div><div class="col-md-6 tv-product-page-content"><div class="tvproduct-title-brandimage" itemprop="itemReviewed" itemscope itemtype="http://schema.org/Thing"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_150454481363343e46bdf126_24329545', 'page_header_container');
?>
<div class="tvcms-product-brand-logo"><?php if ((isset($_smarty_tpl->tpl_vars['manufacturer_image_url']->value))) {?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_brand_url']->value, ENT_QUOTES, 'UTF-8');?>
" class="tvproduct-brand"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['manufacturer_image_url']->value, ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_manufacturer']->value->name, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_manufacturer']->value->name, ENT_QUOTES, 'UTF-8');?>
" height="75px" width="170px" loading="lazy"></a><?php }?></div></div><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReviewProductList','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_29351284863343e46bee4e3_06020981', 'product_prices');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_170800994163343e46bf14a6_44974150', 'product_availability');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_58669450763343e46bfde73_69601961', 'product_description_short');
if (!empty($_smarty_tpl->tpl_vars['product']->value['specific_prices']['from']) && !empty($_smarty_tpl->tpl_vars['product']->value['specific_prices']['to']) && $_smarty_tpl->tpl_vars['product']->value['specific_prices']['from'] != '0000-00-00 00:00:00' && $_smarty_tpl->tpl_vars['product']->value['specific_prices']['to'] != '0000-00-00 00:00:00') {
$_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product-timer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('timer'=>$_smarty_tpl->tpl_vars['product']->value['specific_prices']['to']), 0, false);
}?><div class="product-information tvproduct-special-desc"><?php if ($_smarty_tpl->tpl_vars['product']->value['is_customizable'] && count($_smarty_tpl->tpl_vars['product']->value['customizations']['fields'])) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_181235338763343e46c163a7_01048464', 'product_customization');
}?><div class="product-actions"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4325438363343e46c1b2e0_73012968', 'product_buy');
?>
</div></div><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_189811715863343e46c3b3b2_06008564', 'hook_display_reassurance');
?>
</div></div><?php }
/* {block 'product_cover_thumbnails'} */
class Block_138803383263343e46bdbdc1_56189176 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_cover_thumbnails' => 
  array (
    0 => 'Block_138803383263343e46bdbdc1_56189176',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-cover-thumbnails.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'product_cover_thumbnails'} */
/* {block 'page_title'} */
class Block_78450544463343e46be14e6_93049134 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'page_title'} */
/* {block 'page_header'} */
class Block_155946097263343e46be0311_66843131 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<h1 class="h1" itemprop="name"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_78450544463343e46be14e6_93049134', 'page_title', $this->tplIndex);
?>
</h1><?php
}
}
/* {/block 'page_header'} */
/* {block 'page_header_container'} */
class Block_150454481363343e46bdf126_24329545 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_header_container' => 
  array (
    0 => 'Block_150454481363343e46bdf126_24329545',
  ),
  'page_header' => 
  array (
    0 => 'Block_155946097263343e46be0311_66843131',
  ),
  'page_title' => 
  array (
    0 => 'Block_78450544463343e46be14e6_93049134',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_155946097263343e46be0311_66843131', 'page_header', $this->tplIndex);
}
}
/* {/block 'page_header_container'} */
/* {block 'product_prices'} */
class Block_29351284863343e46bee4e3_06020981 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_prices' => 
  array (
    0 => 'Block_29351284863343e46bee4e3_06020981',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-prices.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'product_prices'} */
/* {block 'product_availability'} */
class Block_170800994163343e46bf14a6_44974150 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_availability' => 
  array (
    0 => 'Block_170800994163343e46bf14a6_44974150',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['product']->value['show_availability'] && $_smarty_tpl->tpl_vars['product']->value['availability_message']) {?><span id="product-availability"><?php if ($_smarty_tpl->tpl_vars['product']->value['availability'] == 'available') {?><i class="material-icons rtl-no-flip product-available">&#xE5CA;</i><?php } elseif ($_smarty_tpl->tpl_vars['product']->value['availability'] == 'last_remaining_items') {?><i class="material-icons product-last-items">&#xE002;</i><?php } else { ?><i class="material-icons product-unavailable">&#xE14B;</i><?php }
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['availability_message'], ENT_QUOTES, 'UTF-8');?>
</span><?php }
}
}
/* {/block 'product_availability'} */
/* {block 'product_description_short'} */
class Block_58669450763343e46bfde73_69601961 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_description_short' => 
  array (
    0 => 'Block_58669450763343e46bfde73_69601961',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['product']->value['description_short']) {?><div id="product-description-short-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" itemscope itemprop="description" class="tvproduct-page-decs"><?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>
</div><?php }
}
}
/* {/block 'product_description_short'} */
/* {block 'product_customization'} */
class Block_181235338763343e46c163a7_01048464 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_customization' => 
  array (
    0 => 'Block_181235338763343e46c163a7_01048464',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:catalog/_partials/product-customization.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('customizations'=>$_smarty_tpl->tpl_vars['product']->value['customizations']), 0, false);
}
}
/* {/block 'product_customization'} */
/* {block 'product_variants'} */
class Block_198171502763343e46c21855_14762981 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-variants.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'product_variants'} */
/* {block 'product_miniature'} */
class Block_154151377863343e46c2a005_76089739 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/pack-product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product_pack']->value), 0, true);
}
}
/* {/block 'product_miniature'} */
/* {block 'product_pack'} */
class Block_104826390363343e46c24713_31253373 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['packItems']->value) {?><div class="product-pack"><p class="h4"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This pack contains','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['packItems']->value, 'product_pack');
$_smarty_tpl->tpl_vars['product_pack']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product_pack']->value) {
$_smarty_tpl->tpl_vars['product_pack']->do_else = false;
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_154151377863343e46c2a005_76089739', 'product_miniature', $this->tplIndex);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><?php }
}
}
/* {/block 'product_pack'} */
/* {block 'product_discounts'} */
class Block_45047711163343e46c2f707_67283158 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-discounts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'product_discounts'} */
/* {block 'product_add_to_cart'} */
class Block_112567075763343e46c32ad0_08280158 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-add-to-cart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'product_add_to_cart'} */
/* {block 'product_refresh'} */
class Block_204024951763343e46c37a29_00365668 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'product_refresh'} */
/* {block 'product_buy'} */
class Block_4325438363343e46c1b2e0_73012968 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_buy' => 
  array (
    0 => 'Block_4325438363343e46c1b2e0_73012968',
  ),
  'product_variants' => 
  array (
    0 => 'Block_198171502763343e46c21855_14762981',
  ),
  'product_pack' => 
  array (
    0 => 'Block_104826390363343e46c24713_31253373',
  ),
  'product_miniature' => 
  array (
    0 => 'Block_154151377863343e46c2a005_76089739',
  ),
  'product_discounts' => 
  array (
    0 => 'Block_45047711163343e46c2f707_67283158',
  ),
  'product_add_to_cart' => 
  array (
    0 => 'Block_112567075763343e46c32ad0_08280158',
  ),
  'product_refresh' => 
  array (
    0 => 'Block_204024951763343e46c37a29_00365668',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" method="post" id="add-to-cart-or-refresh"><input type="hidden" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
"><input type="hidden" name="id_product" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" id="product_page_product_id"><input type="hidden" name="id_customization" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_customization'], ENT_QUOTES, 'UTF-8');?>
" id="product_customization_id"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_198171502763343e46c21855_14762981', 'product_variants', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_104826390363343e46c24713_31253373', 'product_pack', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_45047711163343e46c2f707_67283158', 'product_discounts', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_112567075763343e46c32ad0_08280158', 'product_add_to_cart', $this->tplIndex);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCustomtab'),$_smarty_tpl ) );
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_204024951763343e46c37a29_00365668', 'product_refresh', $this->tplIndex);
?>
</form><?php
}
}
/* {/block 'product_buy'} */
/* {block 'hook_display_reassurance'} */
class Block_189811715863343e46c3b3b2_06008564 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_display_reassurance' => 
  array (
    0 => 'Block_189811715863343e46c3b3b2_06008564',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );
}
}
/* {/block 'hook_display_reassurance'} */
}
