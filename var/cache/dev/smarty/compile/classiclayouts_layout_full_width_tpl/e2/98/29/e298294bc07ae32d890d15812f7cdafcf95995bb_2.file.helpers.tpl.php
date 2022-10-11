<?php
/* Smarty version 3.1.43, created on 2022-10-11 14:19:29
  from '/Applications/MAMP/htdocs/cbdestock/themes/classic/templates/_partials/helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63455f5192b524_48986833',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e298294bc07ae32d890d15812f7cdafcf95995bb' => 
    array (
      0 => '/Applications/MAMP/htdocs/cbdestock/themes/classic/templates/_partials/helpers.tpl',
      1 => 1664276050,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63455f5192b524_48986833 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/Applications/MAMP/htdocs/cbdestock/var/cache/dev/smarty/compile/classiclayouts_layout_full_width_tpl/e2/98/29/e298294bc07ae32d890d15812f7cdafcf95995bb_2.file.helpers.tpl.php',
    'uid' => 'e298294bc07ae32d890d15812f7cdafcf95995bb',
    'call_name' => 'smarty_template_function_renderLogo_56749950363455f519146f7_54158700',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_56749950363455f519146f7_54158700 */
if (!function_exists('smarty_template_function_renderLogo_56749950363455f519146f7_54158700')) {
function smarty_template_function_renderLogo_56749950363455f519146f7_54158700(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_56749950363455f519146f7_54158700 */
}
