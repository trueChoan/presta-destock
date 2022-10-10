<?php
/* Smarty version 3.1.43, created on 2022-09-28 14:30:01
  from '/Applications/MAMP/htdocs/cbdestock/themes/tv_electronic_electron_1_7_v1/modules/blockreassurance/views/templates/hook/displayBlockProduct.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63343e492afec4_39561959',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b92b51de020ca24bb49ae4d5483c21891f8fe524' => 
    array (
      0 => '/Applications/MAMP/htdocs/cbdestock/themes/tv_electronic_electron_1_7_v1/modules/blockreassurance/views/templates/hook/displayBlockProduct.tpl',
      1 => 1664286346,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63343e492afec4_39561959 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="block-reassurance"><ul><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blocks']->value, 'block', false, 'key');
$_smarty_tpl->tpl_vars['block']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['block']->value) {
$_smarty_tpl->tpl_vars['block']->do_else = false;
?><li><div class="block-reassurance-item" <?php if ($_smarty_tpl->tpl_vars['block']->value['type_link'] !== $_smarty_tpl->tpl_vars['LINK_TYPE_NONE']->value && !empty($_smarty_tpl->tpl_vars['block']->value['link'])) {?> style="cursor:pointer;" onclick="window.open('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['link'], ENT_QUOTES, 'UTF-8');?>
')"<?php }?>><?php if ($_smarty_tpl->tpl_vars['block']->value['icon'] != 'undefined') {
if ($_smarty_tpl->tpl_vars['block']->value['icon']) {?><img class="svg" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['icon'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['title'], ENT_QUOTES, 'UTF-8');?>
" height="25px" width="25px" loading="lazy"><?php } elseif ($_smarty_tpl->tpl_vars['block']->value['custom_icon']) {?><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['custom_icon'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['title'], ENT_QUOTES, 'UTF-8');?>
" height="25px" width="25px" loading="lazy"><?php }
}
if (empty($_smarty_tpl->tpl_vars['block']->value['description'])) {?><span class="block-title" style="color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['textColor']->value, ENT_QUOTES, 'UTF-8');?>
;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span><?php } else { ?><span class="block-title" style="color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['textColor']->value, ENT_QUOTES, 'UTF-8');?>
;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span><span style="color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['textColor']->value, ENT_QUOTES, 'UTF-8');?>
;"><?php echo $_smarty_tpl->tpl_vars['block']->value['description'];?>
</span><?php }?></div></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul><div class="clearfix"></div></div>
<?php }
}
