<?php
/* Smarty version 3.1.43, created on 2022-09-28 14:29:58
  from 'module:pscontactinfonav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63343e463e1d69_35632522',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0eb2119957cbc13b240126b3ccd8fac8f109f1e2' => 
    array (
      0 => 'module:pscontactinfonav.tpl',
      1 => 1664286346,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63343e463e1d69_35632522 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="_desktop_contact_link" class=""><div id="contact-link"><a href="tel:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact_infos']->value['phone'], ENT_QUOTES, 'UTF-8');?>
"><i class='material-icons'>&#xe0b0;</i><?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['phone']) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'[1]%phone%[/1]','sprintf'=>array('[1]'=>'<span>','[/1]'=>'</span>','%phone%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['phone']),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );
}?></a></div></div><?php }
}
