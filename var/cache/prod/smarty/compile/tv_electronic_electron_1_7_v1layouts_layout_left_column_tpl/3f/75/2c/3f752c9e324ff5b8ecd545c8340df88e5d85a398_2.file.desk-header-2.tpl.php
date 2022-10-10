<?php
/* Smarty version 3.1.43, created on 2022-09-28 14:31:57
  from '/Applications/MAMP/htdocs/cbdestock/themes/tv_electronic_electron_1_7_v1/templates/_partials/desk-header-2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63343ebd3e64f0_68792542',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f752c9e324ff5b8ecd545c8340df88e5d85a398' => 
    array (
      0 => '/Applications/MAMP/htdocs/cbdestock/themes/tv_electronic_electron_1_7_v1/templates/_partials/desk-header-2.tpl',
      1 => 1664286346,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63343ebd3e64f0_68792542 (Smarty_Internal_Template $_smarty_tpl) {
?>    <div class="tvcmsdesktop-top-header-wrapper header-2" data-header-layout="2"><div class='tvheader-offer-wrapper tvforce-hide'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTopOfferText'),$_smarty_tpl ) );?>
</div><div class='container-fluid tvcmsdesktop-top-second hidden-md-down'><div class="container"><div class="row tvcmsdesktop-top-header-box"><div class='col-lg-4 col-md-4 col-xl-4 col-sm-12 tvcms-header-logo-wrapper'><div class="hidden-sm-down tvcms-header-logo" id="tvcmsdesktop-logo"><?php if ($_smarty_tpl->tpl_vars['withData']->value) {?><div class="tv-header-logo"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
"><img class="logo img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
" height="35" width="201"></a></div><?php }?></div></div><div class="col-lg-4 col-md-4 col-xl-4 col-sm-12 tvcmsheader-search"><div class='tvcmssearch-wrapper' id="_desktop_search"><?php if ($_smarty_tpl->tpl_vars['withData']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavSearchBlock'),$_smarty_tpl ) );
}?></div></div><div class="col-lg-4 col-md-4 col-xl-4 col-sm-12 tvcmsheader-nav-right"><div class="tv-contact-account-cart-wrapper"><div id='tvcmsdesktop-account-button'><?php if ($_smarty_tpl->tpl_vars['withData']->value) {?><div class="tv-header-account tv-account-wrapper tvcms-header-myaccount"><button class="btn-unstyle tv-myaccount-btn tv-myaccount-btn-desktop" name="User Icon" aria-label="User Icon"><svg version="1.1" id="Layer_1" x="0px" y="0px" width="31.377px" height="30.938px" viewBox="0 0 31.377 30.938" xml:space="preserve"><g><path style="fill:none;stroke:#000000;stroke-width:0.6;stroke-miterlimit:10;" d="M15.666,17.321c7.626,0,13.904,5.812,14.837,13.316h0.525c-1.253-8.325-7.642-13.6-15.341-13.6c-7.698,0-14.088,5.274-15.339,13.6h0.48C1.764,23.134,8.041,17.321,15.666,17.321z"></path><path style="fill:#FFD742;" d="M15.688,16.992c-4.494,0-8.15-3.654-8.15-8.148c0-4.497,3.656-8.152,8.15-8.152c4.497,0,8.15,3.655,8.15,8.152C23.839,13.338,20.186,16.992,15.688,16.992"></path><circle style="fill:none;stroke:#000000;stroke-miterlimit:10;" cx="15.689" cy="8.838" r="8.338"></circle></g></svg><?php if ($_smarty_tpl->tpl_vars['customer']->value['is_logged']) {?><span class="tvcms_customer_name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value['gender']['name'][$_smarty_tpl->tpl_vars['customer']->value['gender']['id']], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value['lastname'], ENT_QUOTES, 'UTF-8');?>
</span><?php } else { ?><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign In','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span><?php }?></button><ul class="dropdown-menu tv-account-dropdown tv-dropdown"><?php if ($_smarty_tpl->tpl_vars['customer']->value['is_logged']) {?><li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['my_account'], ENT_QUOTES, 'UTF-8');?>
" class="tvmyccount"><i class="material-icons">&#xe7fd;</i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My Account','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</a></li><?php }?><li class="tvcms-signin"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavCustomerSignInBlock'),$_smarty_tpl ) );?>
</li><li class="ttvcms-wishlist-icon"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavWishlistBlock'),$_smarty_tpl ) );?>
</li><li class="tvheader-compare"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavProductCompareBlock'),$_smarty_tpl ) );?>
</li><li class="tvheader-language"><?php if ($_smarty_tpl->tpl_vars['withData']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavLanguageBlock'),$_smarty_tpl ) );
}?></li><li class="tvheader-currency"><?php if ($_smarty_tpl->tpl_vars['withData']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavCurrencyBlock'),$_smarty_tpl ) );
}?></li></ul></div><?php }?></div><div id="_desktop_cart_manage" class="tvcms-header-cart"><?php if ($_smarty_tpl->tpl_vars['withData']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavShoppingCartBlock'),$_smarty_tpl ) );
}?></div></div></div></div></div></div><div class="tvcms-header-menu-offer-wrapper tvcmsheader-sticky"><div class="position-static tvcms-header-menu"><div class='tvcmsmain-menu-wrapper container'><div id='tvdesktop-megamenu'><?php if ($_smarty_tpl->tpl_vars['withData']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayMegamenu'),$_smarty_tpl ) );
}?></div></div><div class="tvcmsdesktop-contact tvforce-hide"><?php if ($_smarty_tpl->tpl_vars['withData']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav1'),$_smarty_tpl ) );
}?></div></div></div></div><?php }
}
