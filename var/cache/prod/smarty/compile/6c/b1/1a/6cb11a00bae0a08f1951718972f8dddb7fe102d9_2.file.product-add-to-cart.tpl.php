<?php
/* Smarty version 3.1.43, created on 2022-09-28 14:36:51
  from '/Applications/MAMP/htdocs/cbdestock/themes/tv_electronic_electron_1_7_v1/templates/catalog/_partials/product-add-to-cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63343fe3e100a5_18349821',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6cb11a00bae0a08f1951718972f8dddb7fe102d9' => 
    array (
      0 => '/Applications/MAMP/htdocs/cbdestock/themes/tv_electronic_electron_1_7_v1/templates/catalog/_partials/product-add-to-cart.tpl',
      1 => 1664286346,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/product-additional-info.tpl' => 1,
  ),
),false)) {
function content_63343fe3e100a5_18349821 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="product-add-to-cart"><?php if (!$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_132592698163343fe3df1669_97669206', 'product_quantity');
}?></div><?php }
/* {block 'product_additional_info'} */
class Block_68151916463343fe3e09035_28941823 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-additional-info.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'product_additional_info'} */
/* {block 'product_quantity'} */
class Block_132592698163343fe3df1669_97669206 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_quantity' => 
  array (
    0 => 'Block_132592698163343fe3df1669_97669206',
  ),
  'product_additional_info' => 
  array (
    0 => 'Block_68151916463343fe3e09035_28941823',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="product-quantity"><span class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quantity : ','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span><div class="qty"><input type="text" name="qty" id="quantity_wanted" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity_wanted'], ENT_QUOTES, 'UTF-8');?>
" class="input-group" min="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['minimal_quantity'], ENT_QUOTES, 'UTF-8');?>
" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quantity','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"></div></div><div class='tvwishlist-compare-wrapper-page add tv-product-page-add-to-cart-wrapper'><div class="tvcart-btn-model"><button class="tvall-inner-btn add-to-cart <?php if (!$_smarty_tpl->tpl_vars['product']->value['add_to_cart_url']) {?> disabled <?php }?>" data-button-action="add-to-cart" type="submit" <?php if (!$_smarty_tpl->tpl_vars['product']->value['add_to_cart_url']) {?> disabled <?php }?>> <?php if (!$_smarty_tpl->tpl_vars['product']->value['add_to_cart_url']) {?> <i class='material-icons block'>&#xe14b;</i><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Out of stock','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span><?php } else { ?><i class="material-icons shopping-cart">&#xE547;</i><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span><?php }?></button></div><div class="tvproduct-wishlist-compare"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayWishlistProductPage','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductCompareProductPage','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>
</div><div class="tvproduct-stock-social"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPageStockIndicator','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_68151916463343fe3e09035_28941823', 'product_additional_info', $this->tplIndex);
?>
</div></div><?php
}
}
/* {/block 'product_quantity'} */
}
