<?php
/* Smarty version 3.1.43, created on 2022-09-28 14:30:03
  from '/Applications/MAMP/htdocs/cbdestock/modules/tvcmsfooterlogo/views/templates/front/display_home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63343e4bde3c14_96549840',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d405c329d46e0d4d5421b8b23fc143ab2283aad' => 
    array (
      0 => '/Applications/MAMP/htdocs/cbdestock/modules/tvcmsfooterlogo/views/templates/front/display_home.tpl',
      1 => 1664286345,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63343e4bde3c14_96549840 (Smarty_Internal_Template $_smarty_tpl) {
?>    <?php if (Configuration::get('TVCMSFOOTERLOGO_IMG')) {?><div class='tvfooter-about-logo-wrapper tvfooter-logo-block'><?php if ($_smarty_tpl->tpl_vars['show_fields']->value['main_image']) {?><div class='tvfooter-img-block'><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars(Configuration::get('TVCMSFOOTERLOGO_IMG'), ENT_QUOTES, 'UTF-8');?>
" alt="" height="34" width="200" class="tv-img-responsive" loading="lazy"/></div><?php }
if ($_smarty_tpl->tpl_vars['show_fields']->value['main_title']) {?><div class='tvfooter-logo-title'><?php echo htmlspecialchars(Configuration::get('TVCMSFOOTERLOGO_TITLE',$_smarty_tpl->tpl_vars['id_lang']->value), ENT_QUOTES, 'UTF-8');?>
</div><?php }
if ($_smarty_tpl->tpl_vars['show_fields']->value['main_short_description']) {?><div class='tvfooter-logo-short-title'><?php echo htmlspecialchars(Configuration::get('TVCMSFOOTERLOGO_SUB_DESCRIPTION',$_smarty_tpl->tpl_vars['id_lang']->value), ENT_QUOTES, 'UTF-8');?>
</div><?php }
if ($_smarty_tpl->tpl_vars['show_fields']->value['main_description']) {?><div class='tvfooter-logo-desc'><?php echo htmlspecialchars(Configuration::get('TVCMSFOOTERLOGO_DESCRIPTION',$_smarty_tpl->tpl_vars['id_lang']->value), ENT_QUOTES, 'UTF-8');?>
</div><?php }?></div><?php }
}
}
