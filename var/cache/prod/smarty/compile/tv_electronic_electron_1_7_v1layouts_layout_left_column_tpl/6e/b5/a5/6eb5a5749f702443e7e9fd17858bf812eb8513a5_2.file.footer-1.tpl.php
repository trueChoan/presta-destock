<?php
/* Smarty version 3.1.43, created on 2022-09-28 14:31:58
  from '/Applications/MAMP/htdocs/cbdestock/themes/tv_electronic_electron_1_7_v1/templates/_partials/footer-1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63343ebea99b79_65366707',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6eb5a5749f702443e7e9fd17858bf812eb8513a5' => 
    array (
      0 => '/Applications/MAMP/htdocs/cbdestock/themes/tv_electronic_electron_1_7_v1/templates/_partials/footer-1.tpl',
      1 => 1664286346,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63343ebea99b79_65366707 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperBottom"),$_smarty_tpl ) );
}
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayShowMap'),$_smarty_tpl ) );?>
<div class="footer-container tvcmsfooter-background-image footer-1" data-footer-layout="1" <?php if ($_smarty_tpl->tpl_vars['FooterImageStatus']->value) {?>style="background-image: url('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['paths']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['FooterBackgroundImage']->value, ENT_QUOTES, 'UTF-8');?>
');" <?php }?>> <div class="container tvfooter-logo-link-wrapper"><div class="tvfooter-storelogo-weapper"><div class="tvfooter-storelogo-inner clearfix"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_74727985663343ebea6fff9_79570308', 'hook_footer_part_2');
?>
</div></div><div class='tvfooter-storelogo-imformation row'><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_143410138363343ebea74bb8_60668443', 'hook_footer_part_1');
?>
</div><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_79564536263343ebea7f379_95668867', 'hook_footer');
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCustomsocialblock'),$_smarty_tpl ) );?>
<div class='tvbottom-to-top'><a href="javascript:" class="tvbottom-to-top-icon"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Go Top','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span><i class='material-icons'>&#xe316;</i></a></div></div><div class="tvfooter-copy-payment-icon-wrapper"><div class="container tvfooter-copy-payment-icon-content"><div class="row tvfooter-copy-payment-icon-inner"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayPaymentIcon'),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCopyRightText'),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displaySocialMediaBlock'),$_smarty_tpl ) );?>
</div></div></div></div><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCustomJs'),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTvcmsFooter'),$_smarty_tpl ) );
}
/* {block 'hook_footer_part_2'} */
class Block_74727985663343ebea6fff9_79570308 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_part_2' => 
  array (
    0 => 'Block_74727985663343ebea6fff9_79570308',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterPart2'),$_smarty_tpl ) );
}
}
/* {/block 'hook_footer_part_2'} */
/* {block 'hook_footer_part_1'} */
class Block_143410138363343ebea74bb8_60668443 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_part_1' => 
  array (
    0 => 'Block_143410138363343ebea74bb8_60668443',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayContactCinfo'),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterCategory'),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterPart1'),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayMyaccountcblock'),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNewslettersubscription'),$_smarty_tpl ) );
}
}
/* {/block 'hook_footer_part_1'} */
/* {block 'hook_footer'} */
class Block_79564536263343ebea7f379_95668867 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer' => 
  array (
    0 => 'Block_79564536263343ebea7f379_95668867',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooter'),$_smarty_tpl ) );
}
}
/* {/block 'hook_footer'} */
}
