<?php
/* Smarty version 3.1.43, created on 2022-09-28 14:30:01
  from '/Applications/MAMP/htdocs/cbdestock/themes/tv_electronic_electron_1_7_v1/templates/catalog/_partials/product-details.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63343e495b87a3_49162984',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4acae585cab221609c1369d380bcc22e3423ce30' => 
    array (
      0 => '/Applications/MAMP/htdocs/cbdestock/themes/tv_electronic_electron_1_7_v1/templates/catalog/_partials/product-details.tpl',
      1 => 1664286346,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63343e495b87a3_49162984 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="tab-pane fade<?php if (!$_smarty_tpl->tpl_vars['product']->value['description']) {?> in active<?php }?>"id="product-details"data-product="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['embedded_attributes'] )), ENT_QUOTES, 'UTF-8');?>
"role="tabpanel"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_160443325863343e495676e7_87000032', 'product_reference');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_195495658463343e4957e0b2_52648767', 'product_quantities');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_86570704363343e4958a791_83106565', 'product_availability_date');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_131037043163343e49591d69_96532105', 'product_out_of_stock');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_155649444063343e49595654_93363774', 'product_features');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_179766850463343e495a3c49_40330819', 'product_specific_references');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_200350238963343e495aea49_84212875', 'product_condition');
?>
</div><?php }
/* {block 'product_reference'} */
class Block_160443325863343e495676e7_87000032 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_reference' => 
  array (
    0 => 'Block_160443325863343e495676e7_87000032',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['product_manufacturer']->value->id))) {?><div class="product-manufacturer"><?php if ((isset($_smarty_tpl->tpl_vars['manufacturer_image_url']->value))) {?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_brand_url']->value, ENT_QUOTES, 'UTF-8');?>
"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['manufacturer_image_url']->value, ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_manufacturer']->value->name, ENT_QUOTES, 'UTF-8');?>
"></a><?php } else { ?><label class="label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Brand','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</label><span><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_brand_url']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_manufacturer']->value->name, ENT_QUOTES, 'UTF-8');?>
</a></span><?php }?></div><?php }
if ((isset($_smarty_tpl->tpl_vars['product']->value['reference_to_display']))) {?><div class="product-reference"><label class="label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reference','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
 </label><span itemprop="sku"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['reference_to_display'], ENT_QUOTES, 'UTF-8');?>
</span></div><?php }
}
}
/* {/block 'product_reference'} */
/* {block 'product_quantities'} */
class Block_195495658463343e4957e0b2_52648767 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_quantities' => 
  array (
    0 => 'Block_195495658463343e4957e0b2_52648767',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['product']->value['show_quantities']) {?><div class="product-quantities"><label class="label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'In stock','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</label><span data-stock="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
" data-allow-oosp="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['allow_oosp'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity_label'], ENT_QUOTES, 'UTF-8');?>
</span></div><?php }
}
}
/* {/block 'product_quantities'} */
/* {block 'product_availability_date'} */
class Block_86570704363343e4958a791_83106565 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_availability_date' => 
  array (
    0 => 'Block_86570704363343e4958a791_83106565',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['product']->value['availability_date']) {?><div class="product-availability-date"><label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Availability date:','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
 </label><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['availability_date'], ENT_QUOTES, 'UTF-8');?>
</span></div><?php }
}
}
/* {/block 'product_availability_date'} */
/* {block 'product_out_of_stock'} */
class Block_131037043163343e49591d69_96532105 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_out_of_stock' => 
  array (
    0 => 'Block_131037043163343e49591d69_96532105',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="product-out-of-stock"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'actionProductOutOfStock','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>
</div><?php
}
}
/* {/block 'product_out_of_stock'} */
/* {block 'product_features'} */
class Block_155649444063343e49595654_93363774 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_features' => 
  array (
    0 => 'Block_155649444063343e49595654_93363774',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['product']->value['grouped_features']) {?><div class="product-features"><p class="h6"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Data sheet','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p><dl class="data-sheet"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['grouped_features'], 'feature');
$_smarty_tpl->tpl_vars['feature']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->do_else = false;
?><dt class="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['name'], ENT_QUOTES, 'UTF-8');?>
</dt><dd class="value"><?php echo nl2br(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['feature']->value['value'],'htmlall' )));?>
</dd><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></dl></div><?php }
}
}
/* {/block 'product_features'} */
/* {block 'product_specific_references'} */
class Block_179766850463343e495a3c49_40330819 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_specific_references' => 
  array (
    0 => 'Block_179766850463343e495a3c49_40330819',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['product']->value['specific_references']))) {?><div class="product-features"><p class="h6"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Specific References','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p><dl class="data-sheet"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['specific_references'], 'reference', false, 'key');
$_smarty_tpl->tpl_vars['reference']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['reference']->value) {
$_smarty_tpl->tpl_vars['reference']->do_else = false;
?><dt class="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
</dt><dd class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['reference']->value, ENT_QUOTES, 'UTF-8');?>
</dd><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></dl></div><?php }
}
}
/* {/block 'product_specific_references'} */
/* {block 'product_condition'} */
class Block_200350238963343e495aea49_84212875 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_condition' => 
  array (
    0 => 'Block_200350238963343e495aea49_84212875',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['product']->value['condition']) {?><div class="product-condition"><label class="label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Condition','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
 </label><link itemprop="itemCondition" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['condition']['schema_url'], ENT_QUOTES, 'UTF-8');?>
"/><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['condition']['label'], ENT_QUOTES, 'UTF-8');?>
</span></div><?php }
}
}
/* {/block 'product_condition'} */
}
