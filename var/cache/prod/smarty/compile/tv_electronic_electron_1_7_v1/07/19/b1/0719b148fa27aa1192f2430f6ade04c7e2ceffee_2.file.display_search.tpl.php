<?php
/* Smarty version 3.1.43, created on 2022-09-28 14:29:55
  from '/Applications/MAMP/htdocs/cbdestock/modules/tvcmssearch/views/templates/front/display_search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63343e43bdf773_01520700',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0719b148fa27aa1192f2430f6ade04c7e2ceffee' => 
    array (
      0 => '/Applications/MAMP/htdocs/cbdestock/modules/tvcmssearch/views/templates/front/display_search.tpl',
      1 => 1664286345,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63343e43bdf773_01520700 (Smarty_Internal_Template $_smarty_tpl) {
?>    <div class="search-widget tvcmsheader-search" data-search-controller-url="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['search_controller_url']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><div class="tvsearch-top-wrapper"><div class="tvheader-sarch-display"><div class="tvheader-search-display-icon"><div class="tvsearch-open"><svg version="1.1" id="Layer_1" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 30 30" xml:space="preserve"><g><polygon points="29.245,30 21.475,22.32 22.23,21.552 30,29.232  " /><circle style="fill:#FFD741;" cx="13" cy="13" r="12.1" /><circle style="fill:none;stroke:#000000;stroke-miterlimit:10;" cx="13" cy="13" r="12.5" /></g></svg></div><div class="tvsearch-close"><svg version="1.1" id="Layer_1" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 20 20" xml:space="preserve"><g><rect x="9.63" y="-3.82" transform="matrix(0.7064 -0.7078 0.7078 0.7064 -4.1427 10.0132)" width="1" height="27.641"></rect></g><g><rect x="9.63" y="-3.82" transform="matrix(-0.7064 -0.7078 0.7078 -0.7064 9.9859 24.1432)" width="1" height="27.641"></rect></g></svg></div></div></div><div class="tvsearch-header-display-wrappper tvsearch-header-display-full"><form method="get" action="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['search_controller_url']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><input type="hidden" name="controller" value="search" /><div class="tvheader-top-search"><div class="tvheader-top-search-wrapper-info-box"><input type="text" name="s" class='tvcmssearch-words' placeholder="<?php if (Configuration::get('TVCMSCUSTOMSETTING_SEARCH_PLACEHOLDER_TEXT',$_smarty_tpl->tpl_vars['language']->value['id'])) {
echo htmlspecialchars(Configuration::get('TVCMSCUSTOMSETTING_SEARCH_PLACEHOLDER_TEXT',$_smarty_tpl->tpl_vars['language']->value['id']), ENT_QUOTES, 'UTF-8');
}?>" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','mod'=>'tvcmssearch'),$_smarty_tpl ) );?>
" autocomplete="off" /></div></div><div class="tvheader-top-search-wrapper"><button type="submit" class="tvheader-search-btn" aria-label="Search"><svg version="1.1" id="Layer_1" x="0px" y="0px" width="22px" height="22px" viewBox="0 0 30 30" xml:space="preserve"><g><polygon points="29.245,30 21.475,22.32 22.23,21.552 30,29.232  " /><circle style="fill:#FFD741;" cx="13" cy="13" r="12.1" /><circle style="fill:none;stroke:#000000;stroke-miterlimit:10;" cx="13" cy="13" r="12.5" /></g></svg></button></div></form><div class='tvsearch-result'></div></div></div></div><?php }
}
