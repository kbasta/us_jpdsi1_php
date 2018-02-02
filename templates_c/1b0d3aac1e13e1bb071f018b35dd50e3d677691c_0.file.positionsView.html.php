<?php
/* Smarty version 3.1.32-dev-1, created on 2017-06-26 15:43:35
  from "C:\xampp\htdocs\zad\p2\app\users\positions\positionsView.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-1',
  'unifunc' => 'content_59510f87e56614_85556180',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b0d3aac1e13e1bb071f018b35dd50e3d677691c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\zad\\p2\\app\\users\\positions\\positionsView.html',
      1 => 1498484614,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59510f87e56614_85556180 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1820459510f87e2f8f3_69590869', 'kontent');
?>
	<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ($_smarty_tpl->tpl_vars['conf']->value->root_path).("/templates/main.html"));
}
/* {block 'kontent'} */
class Block_1820459510f87e2f8f3_69590869 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'kontent' => 
  array (
    0 => 'Block_1820459510f87e2f8f3_69590869',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	
		<div id = "content" class = "col-lg-9">
			<h3>Witaj <?php echo $_smarty_tpl->tpl_vars['infoUser']->value["imie"];?>
 <?php echo $_smarty_tpl->tpl_vars['infoUser']->value["nazwisko"];?>
!</h3>
			<p>Twoja kara na chwilę obecną wynosi: <?php echo $_smarty_tpl->tpl_vars['infoUser']->value["kara"];?>
 zł.</p>
			<table class="table">
			<thead>
				<tr>
					<th>NW</th>
					<th>user</th>
					<th>book</th>
					<th>Data Oddania</th>
					<th>Status</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['books']->value, 'b');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['b']->value) {
?>
			<tr><td><?php echo $_smarty_tpl->tpl_vars['b']->value["idWyp"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['b']->value["tytul"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['b']->value["autor"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['b']->value["data_od"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['b']->value["status"];?>
</td><td><?php if (($_smarty_tpl->tpl_vars['b']->value["status"] == "wypozyczony")) {?><a class="btn btn-info" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
bookPrz&id=<?php echo $_smarty_tpl->tpl_vars['b']->value['idWyp'];?>
">Przedłuż</a><?php }?></td></tr>
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
