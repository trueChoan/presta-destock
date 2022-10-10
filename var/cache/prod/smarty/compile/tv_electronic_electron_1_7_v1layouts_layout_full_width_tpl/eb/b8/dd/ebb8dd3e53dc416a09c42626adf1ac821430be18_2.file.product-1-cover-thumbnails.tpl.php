<?php
/* Smarty version 3.1.43, created on 2022-09-28 14:29:59
  from '/Applications/MAMP/htdocs/cbdestock/themes/tv_electronic_electron_1_7_v1/templates/catalog/_partials/product-1-cover-thumbnails.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63343e4726e6c5_02307404',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ebb8dd3e53dc416a09c42626adf1ac821430be18' => 
    array (
      0 => '/Applications/MAMP/htdocs/cbdestock/themes/tv_electronic_electron_1_7_v1/templates/catalog/_partials/product-1-cover-thumbnails.tpl',
      1 => 1664286346,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63343e4726e6c5_02307404 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_79751807763343e47224865_98156161', 'page_content_container');
}
/* {block 'product_flags'} */
class Block_25049394563343e47229118_18738575 extends Smarty_Internal_Block
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
/* {block 'product_cover'} */
class Block_115606040163343e47227f57_96810872 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="product-cover col-xl-10 col-sm-9"><div class="tvproduct-image-slider"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_25049394563343e47229118_18738575', 'product_flags', $this->tplIndex);
if ($_smarty_tpl->tpl_vars['product']->value['default_image']) {?><img class="js-qv-product-cover" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['default_image']['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['default_image']['bySize']['large_default']['height'], ENT_QUOTES, 'UTF-8');?>
" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['default_image']['bySize']['large_default']['width'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
" itemprop="image" loading="lazy"><div class="layer" data-toggle="modal" data-target="#product-modal"><i class='material-icons'>&#xe3c2;</i></div><?php } else { ?><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
" loading="lazy"><?php }?></div></div><?php
}
}
/* {/block 'product_cover'} */
/* {block 'product_cover_thumbnails'} */
class Block_41225450563343e47226d80_64531287 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_115606040163343e47227f57_96810872', 'product_cover', $this->tplIndex);
}
}
/* {/block 'product_cover_thumbnails'} */
/* {block 'product_images'} */
class Block_166366588363343e472527a0_81431948 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="tvvertical-slider col-xl-2 col-sm-3"><div class="product-images"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['images'], 'image');
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?><div class="tvcmsVerticalSlider item"><picture><source srcset="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['medium_default']['url'], ENT_QUOTES, 'UTF-8');?>
" media="(max-width: 768px)"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['side_product_default']['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumb js-thumb <?php if ($_smarty_tpl->tpl_vars['image']->value['id_image'] == $_smarty_tpl->tpl_vars['product']->value['cover']['id_image']) {?> selected <?php }?>" data-image-medium-src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['medium_default']['url'], ENT_QUOTES, 'UTF-8');?>
" data-image-large-src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
" itemprop="image" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['side_product_default']['height'], ENT_QUOTES, 'UTF-8');?>
" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['side_product_default']['width'], ENT_QUOTES, 'UTF-8');?>
" loading="lazy"></picture></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><div class="arrows js-arrowsxx"><i class="tvvertical-slider-next material-icons arrow-up js-arrow-up">&#xE316;</i><i class="tvvertical-slider-pre material-icons arrow-down js-arrow-down">&#xE313;</i></div></div><?php
}
}
/* {/block 'product_images'} */
/* {block 'page_content'} */
class Block_133859855163343e47225b85_20519372 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="images-container"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_41225450563343e47226d80_64531287', 'product_cover_thumbnails', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_166366588363343e472527a0_81431948', 'product_images', $this->tplIndex);
?>
</div><?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_79751807763343e47224865_98156161 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_79751807763343e47224865_98156161',
  ),
  'page_content' => 
  array (
    0 => 'Block_133859855163343e47225b85_20519372',
  ),
  'product_cover_thumbnails' => 
  array (
    0 => 'Block_41225450563343e47226d80_64531287',
  ),
  'product_cover' => 
  array (
    0 => 'Block_115606040163343e47227f57_96810872',
  ),
  'product_flags' => 
  array (
    0 => 'Block_25049394563343e47229118_18738575',
  ),
  'product_images' => 
  array (
    0 => 'Block_166366588363343e472527a0_81431948',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="page-contents product-1" id="content"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_133859855163343e47225b85_20519372', 'page_content', $this->tplIndex);
?>
</div><?php
}
}
/* {/block 'page_content_container'} */
}
