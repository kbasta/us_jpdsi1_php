<?php
/* Smarty version 3.1.32-dev-1, created on 2017-06-25 22:44:51
  from "C:\xampp\htdocs\zad\p2\app\login\LoginView.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-1',
  'unifunc' => 'content_595020c3d02454_19033424',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '68e9b3ce92823a3ec6d65863f54542bf785cd5a1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\zad\\p2\\app\\login\\LoginView.html',
      1 => 1498338355,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595020c3d02454_19033424 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18004595020c3cf8434_47066673', 'kontent');
?>
	<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ($_smarty_tpl->tpl_vars['conf']->value->root_path).("/templates/main.html"));
}
/* {block 'kontent'} */
class Block_18004595020c3cf8434_47066673 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'kontent' => 
  array (
    0 => 'Block_18004595020c3cf8434_47066673',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div id = "kontener" class = "col-lg-12">
		<br><div id = "logowanie" class = "col-lg-5 col-sm-offset-1">
			<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login" method="post" class="">
				<fieldset>
					<div class="col-sm-7">
						<label for="id_login">Login: </label>
						<input id="id_login" type="text" name="login" value="" class = "form-control" placeholder = "login"><br>
					</div>
					<div class="col-sm-7">
						<label for="id_pass">Password: </label>
						<input id="id_pass" type="password" name="pass" class = "form-control" placeholder = "password"><br>
					</div>
					<div class="col-sm-6">
						<input type="submit" value="Zaloguj" class="btn btn-success">
					</div>
				</fieldset>
			</form>
			<br>	
		</div>
		<div class = "col-lg-5">
			<p>Jeżeli nie posiadasz u nas konta, zarejestruj się już teraz.</p>
			<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
signupShow" method="post" class="">
				<input type="submit" value="Zarejestruj" class="btn btn-warning">
			</form>
		</div>
	</div>
	
<?php
}
}
/* {/block 'kontent'} */
}
