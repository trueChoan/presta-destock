<?php
/* Smarty version 3.1.43, created on 2022-10-10 10:25:08
  from '/Applications/MAMP/htdocs/cbdestock/admin269btjd43/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6343d6e465c8c4_01449145',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94bcca1ee3682ddd0467ae25d797a0ae91fff052' => 
    array (
      0 => '/Applications/MAMP/htdocs/cbdestock/admin269btjd43/themes/default/template/content.tpl',
      1 => 1664276030,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6343d6e465c8c4_01449145 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
