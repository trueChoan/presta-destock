<?php
/* Smarty version 3.1.43, created on 2022-09-28 14:36:51
  from '/Applications/MAMP/htdocs/cbdestock/themes/tv_electronic_electron_1_7_v1/templates/catalog/_partials/product-customization.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63343fe3c231c4_96604496',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd557d8d48e3797818f15ff01cccae894783c0f07' => 
    array (
      0 => '/Applications/MAMP/htdocs/cbdestock/themes/tv_electronic_electron_1_7_v1/templates/catalog/_partials/product-customization.tpl',
      1 => 1664286346,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63343fe3c231c4_96604496 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="product-customization"><?php if (!$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {?><div class="card card-block"><p class="h4 card-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product customization','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p><p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Don\'t forget to save your customization to be able to add to cart','d'=>'Shop.Forms.Help'),$_smarty_tpl ) );?>
</p><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6094259463343fe3be6688_63477744', 'product_customization_form');
?>
</div><?php }?></div><?php }
/* {block 'product_customization_form'} */
class Block_6094259463343fe3be6688_63477744 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_customization_form' => 
  array (
    0 => 'Block_6094259463343fe3be6688_63477744',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<form method="post" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" enctype="multipart/form-data"><ul class="clearfix"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customizations']->value['fields'], 'field');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?><li class="product-customization-item"><label><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['label'], ENT_QUOTES, 'UTF-8');?>
</label><?php if ($_smarty_tpl->tpl_vars['field']->value['type'] == 'text') {?><textarea placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your message here','d'=>'Shop.Forms.Help'),$_smarty_tpl ) );?>
" class="product-message" maxlength="250" <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?> required <?php }?> name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['input_name'], ENT_QUOTES, 'UTF-8');?>
"></textarea><small class="float-xs-right"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'250 char. max','d'=>'Shop.Forms.Help'),$_smarty_tpl ) );?>
</small><?php if ($_smarty_tpl->tpl_vars['field']->value['text'] !== '') {?><h6 class="customization-message"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your customization:','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
<label><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['text'], ENT_QUOTES, 'UTF-8');?>
</label></h6><?php }
} elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == 'image') {
if ($_smarty_tpl->tpl_vars['field']->value['is_customized']) {?><br><img data-src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['image']['small']['url'], ENT_QUOTES, 'UTF-8');?>
" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['image']['small']['height'], ENT_QUOTES, 'UTF-8');?>
" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['image']['small']['width'], ENT_QUOTES, 'UTF-8');?>
"><a class="remove-image" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['remove_image_url'], ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove Image','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a><?php }?><span class="custom-file"><span class="js-file-name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No selected file','d'=>'Shop.Forms.Help'),$_smarty_tpl ) );?>
</span><input class="file-input js-file-input" <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?> required <?php }?> type="file" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['input_name'], ENT_QUOTES, 'UTF-8');?>
"><button class="tvall-inner-btn"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose file','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span></button></span><small class="float-xs-right"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'.png .jpg .gif','d'=>'Shop.Forms.Help'),$_smarty_tpl ) );?>
</small><?php }?></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul><div class="clearfix"><button class="tvall-inner-btn float-xs-right" type="submit" name="submitCustomizedData"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save Customization','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span></button></div></form><?php
}
}
/* {/block 'product_customization_form'} */
}
