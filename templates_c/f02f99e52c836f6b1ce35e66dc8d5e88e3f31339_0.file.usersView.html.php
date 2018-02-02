<?php
/* Smarty version 3.1.32-dev-1, created on 2017-06-25 22:46:16
  from "C:\xampp\htdocs\zad\p2\app\admin\users\usersView.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-1',
  'unifunc' => 'content_5950211868fca1_32656287',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f02f99e52c836f6b1ce35e66dc8d5e88e3f31339' => 
    array (
      0 => 'C:\\xampp\\htdocs\\zad\\p2\\app\\admin\\users\\usersView.html',
      1 => 1498339210,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5950211868fca1_32656287 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2604359502118674920_33786606', 'kontent');
?>
	<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ($_smarty_tpl->tpl_vars['conf']->value->root_path).("/templates/main.html"));
}
/* {block 'kontent'} */
class Block_2604359502118674920_33786606 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'kontent' => 
  array (
    0 => 'Block_2604359502118674920_33786606',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div id = "content" class = "col-lg-9">
		<table class="table">
			<thead>
				<tr>
					<th>Imie</th>
					<th>Nazwisko</th>
					<th>Login</th>
					<th>Kara</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'u');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['u']->value) {
?>
			<tr><td><?php echo $_smarty_tpl->tpl_vars['u']->value["imie"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['u']->value["nazwisko"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['u']->value["login"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['u']->value["kara"];?>
</td><td><a class="btn btn-info" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
zeruj&id=<?php echo $_smarty_tpl->tpl_vars['u']->value['id'];?>
">Zapłacił</a>&nbsp;<a class="btn btn-danger" onclick="confirmLink('<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
usersDelete&id=<?php echo $_smarty_tpl->tpl_vars['u']->value['id'];?>
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
