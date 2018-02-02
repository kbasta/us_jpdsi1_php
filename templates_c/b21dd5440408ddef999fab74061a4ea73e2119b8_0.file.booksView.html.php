<?php
/* Smarty version 3.1.32-dev-1, created on 2017-06-27 10:06:12
  from "C:\xampp\htdocs\zad\bibliotekaBastaProjekt\app\admin\books\booksView.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-1',
  'unifunc' => 'content_595211f431e800_22021538',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b21dd5440408ddef999fab74061a4ea73e2119b8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\zad\\bibliotekaBastaProjekt\\app\\admin\\books\\booksView.html',
      1 => 1498510162,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595211f431e800_22021538 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3103595211f4302417_89107376', 'kontent');
?>
	<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ($_smarty_tpl->tpl_vars['conf']->value->root_path).("/templates/main.html"));
}
/* {block 'kontent'} */
class Block_3103595211f4302417_89107376 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'kontent' => 
  array (
    0 => 'Block_3103595211f4302417_89107376',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div id = "content" class = "col-lg-9">
		<div style = "text-align: center;">
			<a class = "btn btn-success" href = "<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
booksEdit">Dodaj nową książkę</a><br>
		</div>	
		<table class="table">
			<thead>
				<tr>
					<th>Tytuł</th>
					<th>Autor</th>
					<th>Gatunek</th>
					<th>Ile sztuk</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['books']->value, 'b');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['b']->value) {
?>
			<tr><td><?php echo $_smarty_tpl->tpl_vars['b']->value["tytul"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['b']->value["autor"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['b']->value["gatunek"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['b']->value["ile"];?>
</td><td><a class="btn btn-info" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
booksEdit&id=<?php echo $_smarty_tpl->tpl_vars['b']->value['id'];?>
">Edytuj</a>&nbsp;<a class="btn btn-danger" onclick="confirmLink('<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
booksDelete&id=<?php echo $_smarty_tpl->tpl_vars['b']->value['id'];?>
','Czy aby na pewno?')">Usuń</a></td></tr>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

			</tbody>
		</table>
	</div>
		
<?php
}
}
/* {/block 'kontent'} */
}
