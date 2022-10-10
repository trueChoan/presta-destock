<?php
/* Smarty version 3.1.43, created on 2022-09-28 14:30:00
  from 'module:pssharebuttonsviewstempla' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63343e48a3cb69_19478443',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce908e3af500ef88d0be39d6badc82307b6995cd' => 
    array (
      0 => 'module:pssharebuttonsviewstempla',
      1 => 1664286346,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63343e48a3cb69_19478443 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_77229233563343e489fe822_70373387', 'social_sharing');
}
/* {block 'social_sharing'} */
class Block_77229233563343e489fe822_70373387 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'social_sharing' => 
  array (
    0 => 'Block_77229233563343e489fe822_70373387',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/MAMP/htdocs/cbdestock/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
if ($_smarty_tpl->tpl_vars['social_share_links']->value) {?><div class="social-icon"><ul><?php if ((isset($_smarty_tpl->tpl_vars['social_share_links']->value['facebook'])) && !empty($_smarty_tpl->tpl_vars['social_share_links']->value['facebook'])) {?><li class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['social_share_links']->value['facebook']['class'], ENT_QUOTES, 'UTF-8');?>
 icon-black"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['social_share_links']->value['facebook']['url'], ENT_QUOTES, 'UTF-8');?>
" class="text-hide" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Facebook','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
" rel="noreferrer"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Facebook','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</a></li><?php }
if ((isset($_smarty_tpl->tpl_vars['social_share_links']->value['twitter'])) && !empty($_smarty_tpl->tpl_vars['social_share_links']->value['twitter'])) {?><li class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['social_share_links']->value['twitter']['class'], ENT_QUOTES, 'UTF-8');?>
 icon-black"><a href="<?php echo htmlspecialchars(smarty_modifier_replace($_smarty_tpl->tpl_vars['social_share_links']->value['twitter']['url'],' ','%20'), ENT_QUOTES, 'UTF-8');?>
" class="text-hide" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Twitter','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
" rel="noreferrer"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Twitter','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</a></li><?php }
if ((isset($_smarty_tpl->tpl_vars['social_share_links']->value['googleplus'])) && !empty($_smarty_tpl->tpl_vars['social_share_links']->value['googleplus'])) {?><li class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['social_share_links']->value['googleplus']['class'], ENT_QUOTES, 'UTF-8');?>
 icon-black"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['social_share_links']->value['googleplus']['url'], ENT_QUOTES, 'UTF-8');?>
" class="text-hide" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Google+','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
" rel="noreferrer"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Google+','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</a></li><?php }
if ((isset($_smarty_tpl->tpl_vars['social_share_links']->value['pinterest'])) && !empty($_smarty_tpl->tpl_vars['social_share_links']->value['pinterest'])) {?><li class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['social_share_links']->value['pinterest']['class'], ENT_QUOTES, 'UTF-8');?>
 icon-black"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['social_share_links']->value['pinterest']['url'], ENT_QUOTES, 'UTF-8');?>
" class="text-hide" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Pinterest','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
" rel="noreferrer"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Pinterest','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</a></li><?php }?></ul></div><?php }
}
}
/* {/block 'social_sharing'} */
}
