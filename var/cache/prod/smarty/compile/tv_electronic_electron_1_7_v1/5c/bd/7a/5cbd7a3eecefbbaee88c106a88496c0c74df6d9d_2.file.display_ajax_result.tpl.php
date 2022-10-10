<?php
/* Smarty version 3.1.43, created on 2022-09-28 14:36:14
  from '/Applications/MAMP/htdocs/cbdestock/modules/tvcmssearch/views/templates/front/display_ajax_result.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63343fbe140713_03816558',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5cbd7a3eecefbbaee88c106a88496c0c74df6d9d' => 
    array (
      0 => '/Applications/MAMP/htdocs/cbdestock/modules/tvcmssearch/views/templates/front/display_ajax_result.tpl',
      1 => 1664286345,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63343fbe140713_03816558 (Smarty_Internal_Template $_smarty_tpl) {
?>    <div class="tvcmssearch-dropdown"><div class="tvsearch-dropdown-close-wrapper tvsearch-dropdown-close"><i class="material-icons">&#xe5cd;</i></div><div class="tvsearch-dropdown-total-wrapper"><div class="tvsearch-dropdown-total"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search Result:','mod'=>'tvcmssearch'),$_smarty_tpl ) );?>
 (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['result_data']->value['total'], ENT_QUOTES, 'UTF-8');?>
)</div></div><div class="tvsearch-all-dropdown-wrapper"><?php echo $_smarty_tpl->tpl_vars['result_data']->value['html'];?>
</div><div class="tvsearch-more-search-wrapper"><button class="tvsearch-more-search tvall-inner-btn btn"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'More Result','mod'=>'tvcmssearch'),$_smarty_tpl ) );?>
</span></button></div></div><?php }
}
