<?php
/* Smarty version 3.1.32-dev-1, created on 2017-06-27 10:04:41
  from "C:\xampp\htdocs\zad\bibliotekaBastaProjekt\app\users\search\SearchListPart.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-1',
  'unifunc' => 'content_595211992c35d5_65703627',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d8b415306111b52e5911442bef3da1426622ba4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\zad\\bibliotekaBastaProjekt\\app\\users\\search\\SearchListPart.html',
      1 => 1498498055,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595211992c35d5_65703627 (Smarty_Internal_Template $_smarty_tpl) {
?>
<table id="tab_people" class="table">
<thead>
	<tr>
		<th>Tytuł</th>
		<th>Autor</th>
		<th>Gatunek</th>
		<th>Ile na stanie</th>
		<th>Wypożycz</th>
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
</td><td><?php if ($_smarty_tpl->tpl_vars['b']->value['ile'] != 0) {?><a class="btn btn-info" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
wypozycz&id=<?php echo $_smarty_tpl->tpl_vars['b']->value['id'];?>
">Wypożycz</a><?php }?></td></tr>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

</tbody>
</table><?php }
}
