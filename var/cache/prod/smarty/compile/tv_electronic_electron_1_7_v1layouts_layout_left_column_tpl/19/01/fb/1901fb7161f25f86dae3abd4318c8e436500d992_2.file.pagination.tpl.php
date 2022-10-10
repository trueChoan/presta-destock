<?php
/* Smarty version 3.1.43, created on 2022-09-28 14:36:16
  from '/Applications/MAMP/htdocs/cbdestock/themes/tv_electronic_electron_1_7_v1/templates/_partials/pagination.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63343fc0c1e211_02614092',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1901fb7161f25f86dae3abd4318c8e436500d992' => 
    array (
      0 => '/Applications/MAMP/htdocs/cbdestock/themes/tv_electronic_electron_1_7_v1/templates/_partials/pagination.tpl',
      1 => 1664286346,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63343fc0c1e211_02614092 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<nav class="pagination tvcms-all-pagination"><div class="col-md-6 tv-pagination-result pl-0" <?php if ((isset($_smarty_tpl->tpl_vars['tvcmsinfinitescroll_status']->value))) {?>style='display:none'<?php }?>><div class="tv-pagination-content"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_93410986363343fc0be5ff6_37800618', 'pagination_summary');
?>
</div></div><div class="col-md-6 tv-pagination-number pr-0"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_169203256563343fc0bf0784_89158218', 'pagination_page_list');
?>
</div></nav><?php }
/* {block 'pagination_summary'} */
class Block_93410986363343fc0be5ff6_37800618 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pagination_summary' => 
  array (
    0 => 'Block_93410986363343fc0be5ff6_37800618',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Showing %from%-%to% of %total% item(s)','d'=>'Shop.Theme.Catalog','sprintf'=>array('%from%'=>$_smarty_tpl->tpl_vars['pagination']->value['items_shown_from'],'%to%'=>$_smarty_tpl->tpl_vars['pagination']->value['items_shown_to'],'%total%'=>$_smarty_tpl->tpl_vars['pagination']->value['total_items'])),$_smarty_tpl ) );
}
}
/* {/block 'pagination_summary'} */
/* {block 'pagination_page_list'} */
class Block_169203256563343fc0bf0784_89158218 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pagination_page_list' => 
  array (
    0 => 'Block_169203256563343fc0bf0784_89158218',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['pagination']->value['should_be_displayed']) {?><ul class="page-list clearfix text-sm-center tv-pagination-wrapper"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pagination']->value['pages'], 'page');
$_smarty_tpl->tpl_vars['page']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->do_else = false;
?><li <?php if ($_smarty_tpl->tpl_vars['page']->value['current']) {?> class="current tv-pagination-li" <?php }?>><?php if ($_smarty_tpl->tpl_vars['page']->value['type'] === 'spacer') {?><span class="spacer">&hellip;</span><?php } else { ?><a rel="<?php if ($_smarty_tpl->tpl_vars['page']->value['type'] === 'previous') {?>prev<?php } elseif ($_smarty_tpl->tpl_vars['page']->value['type'] === 'next') {?>next<?php } else { ?>nofollow<?php }?>" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="<?php if ($_smarty_tpl->tpl_vars['page']->value['type'] === 'previous') {?>previous <?php } elseif ($_smarty_tpl->tpl_vars['page']->value['type'] === 'next') {?>next <?php }
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( array('disabled'=>!$_smarty_tpl->tpl_vars['page']->value['clickable'],'js-search-link'=>true) )), ENT_QUOTES, 'UTF-8');?>
" ><?php if ($_smarty_tpl->tpl_vars['page']->value['type'] === 'previous') {?><i class="material-icons">&#xE314;</i><?php } elseif ($_smarty_tpl->tpl_vars['page']->value['type'] === 'next') {?><i class="material-icons">&#xE315;</i><?php } else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page'], ENT_QUOTES, 'UTF-8');
}?></a><?php }?></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul><?php }
}
}
/* {/block 'pagination_page_list'} */
}
