<?php
/* Smarty version 3.1.43, created on 2022-09-28 14:30:04
  from '/Applications/MAMP/htdocs/cbdestock/modules/tvcmsfootercategory/views/templates/front/display_home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63343e4c813cb6_29004772',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4256cad00edb845f3f3dbb7ff83c3fd55f206967' => 
    array (
      0 => '/Applications/MAMP/htdocs/cbdestock/modules/tvcmsfootercategory/views/templates/front/display_home.tpl',
      1 => 1664286345,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63343e4c813cb6_29004772 (Smarty_Internal_Template $_smarty_tpl) {
?>    <?php if (Configuration::get('TVCMSFOOTERCATEGORY_STATUS')) {?><div class='col-xl-2 col-lg-2 col-md-12 links tvfooter-category-block tvfooter-all-block tvfooter-all-part'><?php if ($_smarty_tpl->tpl_vars['show_fields']->value['title']) {?><div class="tvdekstop-footer-all-title-wrapper tvfooter-title-wrapper" data-target="#footer_sub_menu_tvfooter_category" data-toggle="collapse"><div class='tvfooter-title'><?php echo htmlspecialchars(Configuration::get('TVCMSFOOTERCATEGORY_TITLE',$_smarty_tpl->tpl_vars['id_lang']->value), ENT_QUOTES, 'UTF-8');?>
</div><span class="float-xs-right tvfooter-toggle-icon-wrapper navbar-toggler collapse-icons tvfooter-toggle-icon"><i class="material-icons add">&#xE313;</i><i class="material-icons remove">&#xE316;</i></span></div><?php }?><ul id="footer_sub_menu_tvfooter_category" class="collapse"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['category_list']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?><li><i class='material-icons'>&#xe39e;</i><a href='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value["link"], ENT_QUOTES, 'UTF-8');?>
' title='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value["name"][$_smarty_tpl->tpl_vars['id_lang']->value], ENT_QUOTES, 'UTF-8');?>
'><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value["name"][$_smarty_tpl->tpl_vars['id_lang']->value], ENT_QUOTES, 'UTF-8');?>
</a></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul></div><?php }
}
}
