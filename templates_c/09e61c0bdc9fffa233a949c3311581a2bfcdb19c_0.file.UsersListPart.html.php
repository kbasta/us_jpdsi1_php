<?php
/* Smarty version 3.1.32-dev-1, created on 2017-06-26 21:18:11
  from "C:\xampp\htdocs\zad\p2\app\admin\users\UsersListPart.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-1',
  'unifunc' => 'content_59515df3b5e590_43899215',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '09e61c0bdc9fffa233a949c3311581a2bfcdb19c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\zad\\p2\\app\\admin\\users\\UsersListPart.html',
      1 => 1498504254,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59515df3b5e590_43899215 (Smarty_Internal_Template $_smarty_tpl) {
?>
		<table class="table" id = "tab_people">
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
	<?php }
}
