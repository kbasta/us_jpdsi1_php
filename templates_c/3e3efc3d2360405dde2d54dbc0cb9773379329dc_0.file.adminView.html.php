<?php
/* Smarty version 3.1.32-dev-1, created on 2017-06-25 22:45:45
  from "C:\xampp\htdocs\zad\p2\app\powitanie\adminView.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-1',
  'unifunc' => 'content_595020f97bc608_08627336',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e3efc3d2360405dde2d54dbc0cb9773379329dc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\zad\\p2\\app\\powitanie\\adminView.html',
      1 => 1497800708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595020f97bc608_08627336 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_30969595020f97b9d45_46049198', 'kontent');
?>
	<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ($_smarty_tpl->tpl_vars['conf']->value->root_path).("/templates/main.html"));
}
/* {block 'kontent'} */
class Block_30969595020f97b9d45_46049198 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'kontent' => 
  array (
    0 => 'Block_30969595020f97b9d45_46049198',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div id = "content" class = "col-lg-9">
		<h4 style='text-align:center;'>Witaj na stronie Biblioteka Basta</h4><br>
		<p>Nasza biblioteka powstała w roku 2017. dzięki dofinanfowaniu ze środków unijnych. Nie mamy jeszcze historii. Jesteśmy za to prężnie rozwijającą się biblioteką.</p>
	</div>
		
<?php
}
}
/* {/block 'kontent'} */
}
