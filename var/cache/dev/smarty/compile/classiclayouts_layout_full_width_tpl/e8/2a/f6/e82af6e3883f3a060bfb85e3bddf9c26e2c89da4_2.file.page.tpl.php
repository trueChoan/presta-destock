<?php
/* Smarty version 3.1.43, created on 2022-10-10 10:27:14
  from '/Applications/MAMP/htdocs/cbdestock/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6343d762a78e56_46876942',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e82af6e3883f3a060bfb85e3bddf9c26e2c89da4' => 
    array (
      0 => '/Applications/MAMP/htdocs/cbdestock/themes/classic/templates/page.tpl',
      1 => 1664276050,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6343d762a78e56_46876942 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10701596626343d762a5bc40_16141748', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_18985536406343d762a5ee71_73529546 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_14998882696343d762a5d2a7_74460151 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18985536406343d762a5ee71_73529546', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_6118060136343d762a65fb0_30736255 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_12911049146343d762a67d14_81445183 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_8463137506343d762a64aa7_43360701 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6118060136343d762a65fb0_30736255', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12911049146343d762a67d14_81445183', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_4375855986343d762a6ca75_91149610 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_9357522766343d762a6b1d3_55072646 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4375855986343d762a6ca75_91149610', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_10701596626343d762a5bc40_16141748 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_10701596626343d762a5bc40_16141748',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_14998882696343d762a5d2a7_74460151',
  ),
  'page_title' => 
  array (
    0 => 'Block_18985536406343d762a5ee71_73529546',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_8463137506343d762a64aa7_43360701',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_6118060136343d762a65fb0_30736255',
  ),
  'page_content' => 
  array (
    0 => 'Block_12911049146343d762a67d14_81445183',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_9357522766343d762a6b1d3_55072646',
  ),
  'page_footer' => 
  array (
    0 => 'Block_4375855986343d762a6ca75_91149610',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14998882696343d762a5d2a7_74460151', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8463137506343d762a64aa7_43360701', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9357522766343d762a6b1d3_55072646', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
