<?php
/* Smarty version 3.1.43, created on 2022-09-30 14:59:56
  from '/Applications/MAMP/htdocs/cbdestock/modules/blockreassurance/views/templates/admin/tabs/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6336e84c7b21d2_32239028',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '137ebcceb0b85effaca94fbfc535fae89e93fe8c' => 
    array (
      0 => '/Applications/MAMP/htdocs/cbdestock/modules/blockreassurance/views/templates/admin/tabs/content.tpl',
      1 => 1664439207,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./content/listing.tpl' => 1,
    'file:./content/config.tpl' => 1,
  ),
),false)) {
function content_6336e84c7b21d2_32239028 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./content/listing.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:./content/config.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
