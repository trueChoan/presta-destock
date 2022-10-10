<?php
/* Smarty version 3.1.43, created on 2022-09-28 14:36:15
  from '/Applications/MAMP/htdocs/cbdestock/themes/tv_electronic_electron_1_7_v1/templates/catalog/listing/product-list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63343fbf2c34a2_68150003',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0dbab17aef5864ce9f4aed8dc6cdcd192eff45d' => 
    array (
      0 => '/Applications/MAMP/htdocs/cbdestock/themes/tv_electronic_electron_1_7_v1/templates/catalog/listing/product-list.tpl',
      1 => 1664286346,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/microdata/product-list-jsonld.tpl' => 1,
    'file:catalog/_partials/products-top.tpl' => 1,
    'file:catalog/_partials/products.tpl' => 1,
    'file:catalog/_partials/products-bottom.tpl' => 1,
    'file:errors/not-found.tpl' => 1,
  ),
),false)) {
function content_63343fbf2c34a2_68150003 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_127497935563343fbf251cd6_91515623', 'head_microdata_special');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_106144538463343fbf25c941_99249817', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'head_microdata_special'} */
class Block_127497935563343fbf251cd6_91515623 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_microdata_special' => 
  array (
    0 => 'Block_127497935563343fbf251cd6_91515623',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_partials/microdata/product-list-jsonld.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
}
}
/* {/block 'head_microdata_special'} */
/* {block 'product_list_header'} */
class Block_144472756263343fbf25e209_62625468 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'product_list_header'} */
/* {block 'product_list_top'} */
class Block_74718082563343fbf272846_86878323 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:catalog/_partials/products-top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
}
}
/* {/block 'product_list_top'} */
/* {block 'product_list_active_filters'} */
class Block_40929531263343fbf278501_61554359 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div ><?php echo $_smarty_tpl->tpl_vars['listing']->value['rendered_active_filters'];?>
</div><?php
}
}
/* {/block 'product_list_active_filters'} */
/* {block 'product_list'} */
class Block_130986966963343fbf27f003_02745461 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:catalog/_partials/products.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
}
}
/* {/block 'product_list'} */
/* {block 'product_list_bottom'} */
class Block_139693962663343fbf284399_34218010 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:catalog/_partials/products-bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
}
}
/* {/block 'product_list_bottom'} */
/* {block 'content'} */
class Block_106144538463343fbf25c941_99249817 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_106144538463343fbf25c941_99249817',
  ),
  'product_list_header' => 
  array (
    0 => 'Block_144472756263343fbf25e209_62625468',
  ),
  'product_list_top' => 
  array (
    0 => 'Block_74718082563343fbf272846_86878323',
  ),
  'product_list_active_filters' => 
  array (
    0 => 'Block_40929531263343fbf278501_61554359',
  ),
  'product_list' => 
  array (
    0 => 'Block_130986966963343fbf27f003_02745461',
  ),
  'product_list_bottom' => 
  array (
    0 => 'Block_139693962663343fbf284399_34218010',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="main"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_144472756263343fbf25e209_62625468', 'product_list_header', $this->tplIndex);
?>
<div id="products" class="<?php echo htmlspecialchars(Configuration::get('TVCMSCUSTOMSETTING_PRODUCT_LIST_VIEW'), ENT_QUOTES, 'UTF-8');?>
"><?php if (count($_smarty_tpl->tpl_vars['listing']->value['products'])) {?><div><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_74718082563343fbf272846_86878323', 'product_list_top', $this->tplIndex);
?>
</div><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_40929531263343fbf278501_61554359', 'product_list_active_filters', $this->tplIndex);
?>
<div><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_130986966963343fbf27f003_02745461', 'product_list', $this->tplIndex);
?>
</div><div id="js-product-list-bottom"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_139693962663343fbf284399_34218010', 'product_list_bottom', $this->tplIndex);
?>
</div><?php } else {
$_smarty_tpl->_subTemplateRender('file:errors/not-found.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?></div></div><?php if (Configuration::get('TVCMSCAT_BANNER_STATUS') == 0 && $_smarty_tpl->tpl_vars['page']->value['page_name'] == 'category' && !empty($_smarty_tpl->tpl_vars['category']->value['image']['large']['url'])) {?><div class="block-category card card-block clearfix tv-category-block-wrapper"><?php if ($_smarty_tpl->tpl_vars['category']->value['image']['large']['url']) {?><div class="tv-category-cover"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['large']['url'], ENT_QUOTES, 'UTF-8');?>
" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['large']['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['large']['height'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php if (!empty($_smarty_tpl->tpl_vars['category']->value['image']['legend'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['legend'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');
}?>" alt="<?php if (!empty($_smarty_tpl->tpl_vars['category']->value['image']['legend'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['legend'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');
}?>" class="tv-img-responsive" loading="lazy"/></div><?php }
if (!empty($_smarty_tpl->tpl_vars['category']->value['image']['large']['url'])) {?><div class="tv-all-page-main-title-wrapper"><div class="tv-all-page-main-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');?>
</div></div><?php }
if ($_smarty_tpl->tpl_vars['category']->value['description']) {?><div id="category-description" class="text-muted"><?php echo $_smarty_tpl->tpl_vars['category']->value['description'];?>
</div><?php }?></div><?php }
}
}
/* {/block 'content'} */
}
