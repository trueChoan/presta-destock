<?php
/* Smarty version 3.1.43, created on 2022-10-10 10:25:13
  from '/Applications/MAMP/htdocs/cbdestock/modules/ps_themecusto/views/templates/admin/controllers/configuration/elem/modal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6343d6e93c2ba7_65182578',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69ab8c69068b0e4d5a6f9db6c02ffbe7642361bb' => 
    array (
      0 => '/Applications/MAMP/htdocs/cbdestock/modules/ps_themecusto/views/templates/admin/controllers/configuration/elem/modal.tpl',
      1 => 1664276043,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6343d6e93c2ba7_65182578 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="modal fade" id="moduleActionModal" tabindex="-1" role="dialog" aria-labelledby="moduleActionModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="uninstall action_available modal-title" id="moduleActionlModalLongTitle"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Uninstall module?','mod'=>'ps_themecusto'),$_smarty_tpl ) );?>
</h4>
                <h4 class="disable action_available modal-title" id="moduleActionlModalLongTitle"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Disable module?','mod'=>'ps_themecusto'),$_smarty_tpl ) );?>
</h4>
                <h4 class="reset action_available modal-title" id="moduleActionlModalLongTitle"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reset module?','mod'=>'ps_themecusto'),$_smarty_tpl ) );?>
</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="uninstall action_available">
                    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You are about to uninstall','mod'=>'ps_themecusto'),$_smarty_tpl ) );?>
 <span class="module-displayname" ></span></p>
                    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This will definitely disable the module.','mod'=>'ps_themecusto'),$_smarty_tpl ) );?>
</p>
                </div>
                <div class="disable action_available">
                    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You are about to disable ','mod'=>'ps_themecusto'),$_smarty_tpl ) );?>
 <span class="module-displayname" ></span></p>
                    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your current settings will be saved, but the module will no longer be active.','mod'=>'ps_themecusto'),$_smarty_tpl ) );?>
</p>
                </div>
                <div class="reset action_available">
                    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You are about to reset ','mod'=>'ps_themecusto'),$_smarty_tpl ) );?>
 <span class="module-displayname" ></span></p>
                    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This will restore the defaults settings.','mod'=>'ps_themecusto'),$_smarty_tpl ) );?>
</p>
                    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This action cannot be undone.','mod'=>'ps_themecusto'),$_smarty_tpl ) );?>
</p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel','mod'=>'ps_themecusto'),$_smarty_tpl ) );?>
</button>
                <a class="btn btn-primary uppercase" href="#" data-dismiss="modal" data-action="false" data-name="false" data-deletion="true">
                    <span class="uninstall action_available"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes, uninstall it','mod'=>'ps_themecusto'),$_smarty_tpl ) );?>
</span>
                    <span class="disable action_available"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes, disable it','mod'=>'ps_themecusto'),$_smarty_tpl ) );?>
</span>
                    <span class="reset action_available"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes, reset it','mod'=>'ps_themecusto'),$_smarty_tpl ) );?>
</span>
                </a>
            </div>
        </div>
    </div>
</div><?php }
}
