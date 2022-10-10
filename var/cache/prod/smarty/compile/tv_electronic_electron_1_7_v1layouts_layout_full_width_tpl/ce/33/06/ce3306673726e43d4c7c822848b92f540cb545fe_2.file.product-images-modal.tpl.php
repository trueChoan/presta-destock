<?php
/* Smarty version 3.1.43, created on 2022-09-28 14:30:03
  from '/Applications/MAMP/htdocs/cbdestock/themes/tv_electronic_electron_1_7_v1/templates/catalog/_partials/product-images-modal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63343e4b57aa17_36716649',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce3306673726e43d4c7c822848b92f540cb545fe' => 
    array (
      0 => '/Applications/MAMP/htdocs/cbdestock/themes/tv_electronic_electron_1_7_v1/templates/catalog/_partials/product-images-modal.tpl',
      1 => 1664286346,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63343e4b57aa17_36716649 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="modal fade js-product-images-modal" id="product-modal"><div class="modal-dialog" role="document"><div class="modal-content"><div class="modal-header"><button type="button" class="tvmodel-close close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div><div class="modal-body"><?php $_smarty_tpl->_assignInScope('imagesCount', count($_smarty_tpl->tpl_vars['product']->value['images']));?><figure><img class="js-modal-product-cover product-cover-modal" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['width'], ENT_QUOTES, 'UTF-8');?>
" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
" itemprop="image" loading="lazy"><figcaption class="image-caption"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12709723663343e4b5658b9_25007743', 'product_description_short');
?>
</figcaption></figure><aside id="thumbnails" class="thumbnails js-thumbnails text-sm-center"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_163770732863343e4b5698b9_21210108', 'product_images');
if ($_smarty_tpl->tpl_vars['imagesCount']->value > 5) {?><div class="arrows js-modal-arrows"><i class="material-icons arrow-up js-modal-arrow-up">&#xe5ce;</i><i class="material-icons arrow-down js-modal-arrow-down">&#xe5cf;</i></div><?php }?><div><i></i></div></aside></div></div><!-- /.modal-content --></div><!-- /.modal-dialog --></div><!-- /.modal --><?php }
/* {block 'product_description_short'} */
class Block_12709723663343e4b5658b9_25007743 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_description_short' => 
  array (
    0 => 'Block_12709723663343e4b5658b9_25007743',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="product-description-short" itemprop="description"><?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>
</div><?php
}
}
/* {/block 'product_description_short'} */
/* {block 'product_images'} */
class Block_163770732863343e4b5698b9_21210108 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_images' => 
  array (
    0 => 'Block_163770732863343e4b5698b9_21210108',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="js-modal-mask mask <?php if ($_smarty_tpl->tpl_vars['imagesCount']->value <= 5) {?> nomargin <?php }?>"><ul class="product-images js-modal-product-images"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['images'], 'image');
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?><li class="thumb-container"><img data-image-large-src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['large']['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumb js-modal-thumb" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['medium']['url'], ENT_QUOTES, 'UTF-8');?>
"  alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
" width="150" itemprop="image" loading="lazy"></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul></div><?php
}
}
/* {/block 'product_images'} */
}
