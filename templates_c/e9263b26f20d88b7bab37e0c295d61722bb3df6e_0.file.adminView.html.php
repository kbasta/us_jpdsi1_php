<?php
/* Smarty version 3.1.32-dev-1, created on 2017-06-26 22:59:44
  from "C:\xampp\htdocs\zad\bibliotekaBastaProjekt\app\powitanie\adminView.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-1',
  'unifunc' => 'content_595175c0645ec4_12986832',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9263b26f20d88b7bab37e0c295d61722bb3df6e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\zad\\bibliotekaBastaProjekt\\app\\powitanie\\adminView.html',
      1 => 1497800708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595175c0645ec4_12986832 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10348595175c0643582_97683730', 'kontent');
?>
	<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ($_smarty_tpl->tpl_vars['conf']->value->root_path).("/templates/main.html"));
}
/* {block 'kontent'} */
class Block_10348595175c0643582_97683730 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'kontent' => 
  array (
    0 => 'Block_10348595175c0643582_97683730',
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
