<?php
/* Smarty version 3.1.43, created on 2022-09-28 14:35:58
  from '/Applications/MAMP/htdocs/cbdestock/modules/tvcmstwoofferbanner/views/templates/front/display_home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63343fae58c456_91044554',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1a8c053e30b5833068a09bdb224f4992344a875' => 
    array (
      0 => '/Applications/MAMP/htdocs/cbdestock/modules/tvcmstwoofferbanner/views/templates/front/display_home.tpl',
      1 => 1664286345,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63343fae58c456_91044554 (Smarty_Internal_Template $_smarty_tpl) {
?>    <div class="tvcmstwoofferbanners-one container-fluid"><div class="container"><?php ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['TVCMSTWOOFFERBANNER_IMAGE_NAME'], ENT_QUOTES, 'UTF-8');
$_prefixVariable10 = ob_get_clean();
if (!empty($_prefixVariable10)) {?><div class="tvofferbanner-two-inner tvbanner1 col-md-8 col-xs-12"><a class="tvbanner-hover-wrapper" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['TVCMSTWOOFFERBANNER_LINK'], ENT_QUOTES, 'UTF-8');?>
" ><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['TVCMSTWOOFFERBANNER_IMAGE_NAME'], ENT_QUOTES, 'UTF-8');?>
" class="tvimage-lazy img-responsive tv-img-responsive" alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Offer Banner','mod'=>'tvcmstwoofferbanner'),$_smarty_tpl ) );?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['TVCMSTWOOFFERBANNER_IMAGE_HEIGHT_1'], ENT_QUOTES, 'UTF-8');?>
" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['TVCMSTWOOFFERBANNER_IMAGE_WIDTH_1'], ENT_QUOTES, 'UTF-8');?>
" loading="lazy" /><?php if (!empty($_smarty_tpl->tpl_vars['data']->value['TVCMSTWOOFFERBANNER_CAPTION'][$_smarty_tpl->tpl_vars['language_id']->value]) && $_smarty_tpl->tpl_vars['data']->value['TVCMSTWOOFFERBANNER_CAPTION_SIDE'] != 'none') {?><div class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['TVCMSTWOOFFERBANNER_CAPTION_SIDE'], ENT_QUOTES, 'UTF-8');?>
 tvtwoofferbanner-content tvtwoofferbanner-content-one"><?php echo $_smarty_tpl->tpl_vars['data']->value['TVCMSTWOOFFERBANNER_CAPTION'][$_smarty_tpl->tpl_vars['language_id']->value];?>
</div><?php }?></a></div><?php }
ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['TVCMSTWOOFFERBANNER_IMAGE_NAME_2'], ENT_QUOTES, 'UTF-8');
$_prefixVariable11 = ob_get_clean();
if (!empty($_prefixVariable11)) {?><div class="tvofferbanner-two-inner tvbanner2 col-md-4 col-xs-12"><a class="tvbanner-hover-wrapper" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['TVCMSTWOOFFERBANNER_LINK_2'], ENT_QUOTES, 'UTF-8');?>
" ><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['TVCMSTWOOFFERBANNER_IMAGE_NAME_2'], ENT_QUOTES, 'UTF-8');?>
" class="tvimage-lazy img-responsive tv-img-responsive" alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Offer Banner','mod'=>'tvcmstwoofferbanner'),$_smarty_tpl ) );?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['TVCMSTWOOFFERBANNER_IMAGE_HEIGHT_2'], ENT_QUOTES, 'UTF-8');?>
" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['TVCMSTWOOFFERBANNER_IMAGE_WIDTH_2'], ENT_QUOTES, 'UTF-8');?>
" loading="lazy" /><?php if (!empty($_smarty_tpl->tpl_vars['data']->value['TVCMSTWOOFFERBANNER_CAPTION_2'][$_smarty_tpl->tpl_vars['language_id']->value]) && $_smarty_tpl->tpl_vars['data']->value['TVCMSTWOOFFERBANNER_CAPTION_SIDE_2'] != 'none') {?><div class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['TVCMSTWOOFFERBANNER_CAPTION_SIDE_2'], ENT_QUOTES, 'UTF-8');?>
 tvtwoofferbanner-content tvtwoofferbanner-content-two"><?php echo $_smarty_tpl->tpl_vars['data']->value['TVCMSTWOOFFERBANNER_CAPTION_2'][$_smarty_tpl->tpl_vars['language_id']->value];?>
</div><?php }?></a></div><?php }?></div></div><?php }
}
