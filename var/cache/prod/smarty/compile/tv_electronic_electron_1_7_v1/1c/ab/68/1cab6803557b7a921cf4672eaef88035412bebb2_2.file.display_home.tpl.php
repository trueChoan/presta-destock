<?php
/* Smarty version 3.1.43, created on 2022-09-28 14:30:00
  from '/Applications/MAMP/htdocs/cbdestock/modules/tvcmssizechart/views/templates/front/display_home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63343e48dc3175_17744462',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1cab6803557b7a921cf4672eaef88035412bebb2' => 
    array (
      0 => '/Applications/MAMP/htdocs/cbdestock/modules/tvcmssizechart/views/templates/front/display_home.tpl',
      1 => 1664286345,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63343e48dc3175_17744462 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="tvproduct-size-custom"><?php if ($_smarty_tpl->tpl_vars['TVCMSSIZECHART_TEXT_STATUS_1']->value) {?><button type="button" class="btn btn-unstyle tvcustomize-btn fancybox fancybox.iframe"><i class="tvcustom-icons"></i><span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Size Guide','mod'=>'tvcmssizechart'),$_smarty_tpl ) );?>
</span></button><?php }?><a class="open-comment-form btn btn-unstyle" href="#new_comment_form"><i class="tvcustom-icons"></i><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Write your review','mod'=>'tvcmssizechart'),$_smarty_tpl ) );?>
</span></a><div id="tvcmssizechart-popup" class="cms-description"><?php echo $_smarty_tpl->tpl_vars['TVCMSSIZECHART_TEXT_1']->value;?>
</div></div><?php }
}
