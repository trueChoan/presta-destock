<?php
/* Smarty version 3.1.43, created on 2022-09-28 14:29:58
  from '/Applications/MAMP/htdocs/cbdestock/modules/tvcmsvideotab/views/templates/admin/popupvideo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63343e46d43db4_50219216',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8aa7b59b5ea5351aae73bdc3a3d7c93607bde78' => 
    array (
      0 => '/Applications/MAMP/htdocs/cbdestock/modules/tvcmsvideotab/views/templates/admin/popupvideo.tpl',
      1 => 1664286345,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63343e46d43db4_50219216 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['position_popup']->value == 1) {?>
    <?php if (!empty($_smarty_tpl->tpl_vars['url']->value)) {?>
        <div class="tvproduct-play-icon">
                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url']->value, ENT_QUOTES, 'UTF-8');?>
" class="fancybox fancybox.iframe">
                                        <img src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['url1']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
modules/tvcmsvideotab/views/img/iconvideo.png" alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'LIVE VIDEO','mod'=>'tvcmsvideotab'),$_smarty_tpl ) );?>
" style="margin-top:-4px;" height="16px" width="19px" loading="lazy">
                    <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'LIVE VIDEO','mod'=>'tvcmsvideotab'),$_smarty_tpl ) );?>
</span>
                </a>
            </div>
        <?php }
}
}
}
