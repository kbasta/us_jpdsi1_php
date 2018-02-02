<?php
/* Smarty version 3.1.32-dev-1, created on 2017-06-25 22:56:10
  from "C:\xampp\htdocs\zad\p2\app\signup\signupView.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-1',
  'unifunc' => 'content_5950236a1c6c48_62253215',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d08570aca33f83e1b4948180ff792ccd2c9919d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\zad\\p2\\app\\signup\\signupView.html',
      1 => 1498424165,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5950236a1c6c48_62253215 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1625950236a1b9617_86586172', 'kontent');
?>
	<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ($_smarty_tpl->tpl_vars['conf']->value->root_path).("/templates/main.html"));
}
/* {block 'kontent'} */
class Block_1625950236a1b9617_86586172 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'kontent' => 
  array (
    0 => 'Block_1625950236a1b9617_86586172',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div id = "kontener" class = "col-lg-12">
		<br><div id = "logowanie" class = "col-lg-5 col-sm-offset-1">
			<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
signup" method="post" class="">
				<fieldset>
					<div class="col-sm-7">
						<label for="imie">Imie: </label>
						<input id="imie" type="text" name="imie" class = "form-control" placeholder = "imie" value = "<?php echo $_smarty_tpl->tpl_vars['form']->value->name;?>
"><br>
					</div>
					<div class="col-sm-7">
						<label for="nazwisko">Nazwisko: </label>
						<input id="nazwisko" type="text" name="nazwisko" class = "form-control" placeholder = "nazwisko" value = "<?php echo $_smarty_tpl->tpl_vars['form']->value->surname;?>
"><br>
					</div>
					<div class="col-sm-7">
						<label for="login">Login: </label>
						<input id="login" type="text" name="login" class = "form-control" placeholder = "login" value = "<?php echo $_smarty_tpl->tpl_vars['form']->value->login;?>
"><br>
					</div>
					<div class="col-sm-7">
						<label for="password">Haslo: </label>
						<input id="password" type="password" name="password" class = "form-control" placeholder = "haslo"><br>
					</div>
					<div class="col-sm-6">
						<input type="submit" value="Zarejestruj" class="btn btn-success">
						<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
loginShow" class="btn btn-warning">Powrót</a>
					</div>
					
				</fieldset>
				<input type="hidden" name="id">
			</form>
			
			<br>	
		</div>	
	</div>
	
<?php
}
}
/* {/block 'kontent'} */
}
