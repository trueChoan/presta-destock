<?php
/* Smarty version 3.1.43, created on 2022-10-10 10:27:14
  from '/Applications/MAMP/htdocs/cbdestock/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6343d7628cb237_18049644',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e09c7bd0f8a075c6b4fe3a0dfaeefd4fd1c35e03' => 
    array (
      0 => '/Applications/MAMP/htdocs/cbdestock/themes/classic/templates/index.tpl',
      1 => 1664276050,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6343d7628cb237_18049644 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2019906736343d7628c14b5_90566958', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_18626724306343d7628c2b10_33942332 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_2025155136343d7628c6481_48424878 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_20425870026343d7628c4fd0_99161034 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2025155136343d7628c6481_48424878', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_2019906736343d7628c14b5_90566958 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_2019906736343d7628c14b5_90566958',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_18626724306343d7628c2b10_33942332',
  ),
  'page_content' => 
  array (
    0 => 'Block_20425870026343d7628c4fd0_99161034',
  ),
  'hook_home' => 
  array (
    0 => 'Block_2025155136343d7628c6481_48424878',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18626724306343d7628c2b10_33942332', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20425870026343d7628c4fd0_99161034', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
