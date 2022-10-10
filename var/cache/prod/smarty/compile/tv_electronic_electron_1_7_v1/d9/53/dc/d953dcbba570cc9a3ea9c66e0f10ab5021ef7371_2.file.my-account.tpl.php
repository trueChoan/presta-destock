<?php
/* Smarty version 3.1.43, created on 2022-09-28 14:30:07
  from '/Applications/MAMP/htdocs/cbdestock/modules/tvcmswishlist/views/templates/front/my-account.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63343e4fb29532_88307069',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd953dcbba570cc9a3ea9c66e0f10ab5021ef7371' => 
    array (
      0 => '/Applications/MAMP/htdocs/cbdestock/modules/tvcmswishlist/views/templates/front/my-account.tpl',
      1 => 1664286345,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63343e4fb29532_88307069 (Smarty_Internal_Template $_smarty_tpl) {
?><li class="item"><a class="link_compare " href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getModuleLink('tvcmswishlist','mywishlist',array(),true),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My wishlists','mod'=>'tvcmswishlist'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My wishlists','mod'=>'tvcmswishlist'),$_smarty_tpl ) );?>
</a></li><?php }
}
