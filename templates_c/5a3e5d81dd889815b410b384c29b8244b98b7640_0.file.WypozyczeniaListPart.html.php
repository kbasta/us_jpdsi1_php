<?php
/* Smarty version 3.1.32-dev-1, created on 2017-06-26 22:59:46
  from "C:\xampp\htdocs\zad\bibliotekaBastaProjekt\app\admin\wypozyczenia\WypozyczeniaListPart.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-1',
  'unifunc' => 'content_595175c296e859_55644314',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a3e5d81dd889815b410b384c29b8244b98b7640' => 
    array (
      0 => 'C:\\xampp\\htdocs\\zad\\bibliotekaBastaProjekt\\app\\admin\\wypozyczenia\\WypozyczeniaListPart.html',
      1 => 1498498187,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595175c296e859_55644314 (Smarty_Internal_Template $_smarty_tpl) {
?>
<table id="tab_people" class="table">
<thead>
	<tr>
		<th>NW</th>
		<th>Login</th>
		<th>Kara [ZŁ]</th>
		<th>Tytuł</th>
		<th>Autor</th>
		<th>Data wypozyczenia</th>
		<th>Data oddania</th>
		<th>Status</th>
		<th></th>
	</tr>
</thead>
<tbody>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['wyp']->value, 'w');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['w']->value) {
?>
<tr><td><?php echo $_smarty_tpl->tpl_vars['w']->value["idWyp"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['w']->value["login"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['w']->value["kara"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['w']->value["tytul"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['w']->value["autor"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['w']->value["data_wyp"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['w']->value["data_od"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['w']->value["status"];?>
</td><td><?php if ($_smarty_tpl->tpl_vars['w']->value["status"] == "oczekiwany") {?><a class="btn btn-info" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
wypozyczyl&id=<?php echo $_smarty_tpl->tpl_vars['w']->value['idWyp'];?>
">Wypożyczył</a>&nbsp;<?php } elseif ($_smarty_tpl->tpl_vars['w']->value["status"] == "wypozyczony") {?><a class="btn btn-success" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
oddal&id=<?php echo $_smarty_tpl->tpl_vars['w']->value['idWyp'];?>
&idb=<?php echo $_smarty_tpl->tpl_vars['w']->value['bookid'];?>
")>Oddał</a><?php }?></td></tr>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

</tbody>
</table><?php }
}
