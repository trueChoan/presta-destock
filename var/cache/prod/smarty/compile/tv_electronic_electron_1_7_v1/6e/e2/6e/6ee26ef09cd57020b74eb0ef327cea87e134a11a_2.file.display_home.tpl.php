<?php
/* Smarty version 3.1.43, created on 2022-09-28 14:31:58
  from '/Applications/MAMP/htdocs/cbdestock/modules/tvcmsleftsideofferbanner/views/templates/front/display_home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63343ebe153416_95073327',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ee26ef09cd57020b74eb0ef327cea87e134a11a' => 
    array (
      0 => '/Applications/MAMP/htdocs/cbdestock/modules/tvcmsleftsideofferbanner/views/templates/front/display_home.tpl',
      1 => 1664286345,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63343ebe153416_95073327 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['AllPageShow']->value == 1) {
ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['TVCMSLEFTSIDEOFFERBANNER_IMAGE_NAME'], ENT_QUOTES, 'UTF-8');
$_prefixVariable1 = ob_get_clean();
if (!empty($_prefixVariable1)) {?><div class="tvcmsleftsideofferbanners-one"><div class="tvbanner-wrapper tvone-banner-wrapper-info tvbanner1"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['TVCMSLEFTSIDEOFFERBANNER_LINK'], ENT_QUOTES, 'UTF-8');?>
" class="tvbanner-hover-wrapper" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['TVCMSLEFTSIDEOFFERBANNER_CAPTION'][$_smarty_tpl->tpl_vars['language_id']->value], ENT_QUOTES, 'UTF-8');?>
"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['TVCMSLEFTSIDEOFFERBANNER_IMAGE_NAME'], ENT_QUOTES, 'UTF-8');?>
" class="tvimage-lazy img-responsive tv-img-responsive" alt="<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['TVCMSLEFTSIDEOFFERBANNER_CAPTION'][$_smarty_tpl->tpl_vars['language_id']->value])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['TVCMSLEFTSIDEOFFERBANNER_CAPTION'][$_smarty_tpl->tpl_vars['language_id']->value], ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Slider Offer Banner','mod'=>'tvcmsleftsideofferbanner'),$_smarty_tpl ) );
}?>" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['TVCMSLEFTSIDEOFFERBANNER_IMAGE_HEIGHT'], ENT_QUOTES, 'UTF-8');?>
" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['TVCMSLEFTSIDEOFFERBANNER_IMAGE_WIDTH'], ENT_QUOTES, 'UTF-8');?>
" /></a><?php if (!empty($_smarty_tpl->tpl_vars['data']->value['TVCMSLEFTSIDEOFFERBANNER_CAPTION'][$_smarty_tpl->tpl_vars['language_id']->value]) && $_smarty_tpl->tpl_vars['data']->value['TVCMSLEFTSIDEOFFERBANNER_CAPTION_SIDE'] != 'none') {?><div class="tvcmsleftsideofferbanners-content <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['TVCMSLEFTSIDEOFFERBANNER_CAPTION_SIDE'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['TVCMSLEFTSIDEOFFERBANNER_CAPTION'][$_smarty_tpl->tpl_vars['language_id']->value], ENT_QUOTES, 'UTF-8');?>
</div><?php }?></div></div><?php }
} elseif ($_smarty_tpl->tpl_vars['AllPageShow']->value == 0 && $_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {
ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['TVCMSLEFTSIDEOFFERBANNER_IMAGE_NAME'], ENT_QUOTES, 'UTF-8');
$_prefixVariable2 = ob_get_clean();
if (!empty($_prefixVariable2)) {?><div class="tvcmsleftsideofferbanners-one"><div class="tvbanner-wrapper tvone-banner-wrapper-info tvbanner1"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['TVCMSLEFTSIDEOFFERBANNER_LINK'], ENT_QUOTES, 'UTF-8');?>
" class="tvbanner-hover-wrapper" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['TVCMSLEFTSIDEOFFERBANNER_CAPTION'][$_smarty_tpl->tpl_vars['language_id']->value], ENT_QUOTES, 'UTF-8');?>
"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['TVCMSLEFTSIDEOFFERBANNER_IMAGE_NAME'], ENT_QUOTES, 'UTF-8');?>
" class="tvimage-lazy tv-img-responsive img-responsive" alt="<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['TVCMSLEFTSIDEOFFERBANNER_CAPTION'][$_smarty_tpl->tpl_vars['language_id']->value])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['TVCMSLEFTSIDEOFFERBANNER_CAPTION'][$_smarty_tpl->tpl_vars['language_id']->value], ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Slider Offer Banner','mod'=>'tvcmsleftsideofferbanner'),$_smarty_tpl ) );
}?>" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['TVCMSLEFTSIDEOFFERBANNER_IMAGE_HEIGHT'], ENT_QUOTES, 'UTF-8');?>
" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['TVCMSLEFTSIDEOFFERBANNER_IMAGE_WIDTH'], ENT_QUOTES, 'UTF-8');?>
" /></a><?php if (!empty($_smarty_tpl->tpl_vars['data']->value['TVCMSLEFTSIDEOFFERBANNER_CAPTION'][$_smarty_tpl->tpl_vars['language_id']->value]) && $_smarty_tpl->tpl_vars['data']->value['TVCMSLEFTSIDEOFFERBANNER_CAPTION_SIDE'] != 'none') {?><div class="tvcmsleftsideofferbanners-content <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['TVCMSLEFTSIDEOFFERBANNER_CAPTION_SIDE'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['TVCMSLEFTSIDEOFFERBANNER_CAPTION'][$_smarty_tpl->tpl_vars['language_id']->value], ENT_QUOTES, 'UTF-8');?>
</div><?php }?></div></div><?php }
}
}
}
