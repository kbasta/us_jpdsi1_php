<?php
/* Smarty version 3.1.32-dev-1, created on 2017-06-27 10:06:13
  from "C:\xampp\htdocs\zad\bibliotekaBastaProjekt\app\admin\books\edit\booksEdit.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-1',
  'unifunc' => 'content_595211f554b3b3_54278004',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5dec6aa8910618b7850115636fd88d295c184b1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\zad\\bibliotekaBastaProjekt\\app\\admin\\books\\edit\\booksEdit.html',
      1 => 1498332973,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595211f554b3b3_54278004 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13621595211f553bbb8_25172369', 'kontent');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ($_smarty_tpl->tpl_vars['conf']->value->root_path).("/templates/main.html"));
}
/* {block 'kontent'} */
class Block_13621595211f553bbb8_25172369 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'kontent' => 
  array (
    0 => 'Block_13621595211f553bbb8_25172369',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div id = "kontener" class = "col-lg-">
		<br><div id = "ksiazkaAdmin" class = "col-lg-5 col-sm-offset-1">
			<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
booksSave" method="post" class="">
				<fieldset>
					<div class="col-sm-7">
						<label for="imie">Tytuł: </label>
						<input id="imie" type="text" name="tytul" class = "form-control" placeholder = "tytul" value = "<?php echo $_smarty_tpl->tpl_vars['form']->value->tytul;?>
"><br>
					</div>
					<div class="col-sm-7">
						<label for="nazwisko">Autor: </label>
						<input id="nazwisko" type="text" name="autor" class = "form-control" placeholder = "autor" value = "<?php echo $_smarty_tpl->tpl_vars['form']->value->autor;?>
"><br>
					</div>
					<div class="col-sm-7">
						<label for="login">Gatunek: </label>
						<input id="login" type="text" name="gatunek" class = "form-control" placeholder = "gatunek" value = "<?php echo $_smarty_tpl->tpl_vars['form']->value->gatunek;?>
"><br>
					</div>
					<div class="col-sm-7">
						<label for="mail">Ile sztuk: </label>
						<input id="ile" type="text" name="ile" class = "form-control" placeholder = "ile sztuk" value = "<?php echo $_smarty_tpl->tpl_vars['form']->value->ile;?>
"><br>
					</div>
					<div class="col-sm-7">
						<input type="submit" value="Zapisz" class="btn btn-success">
						<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
booksShow" class="btn btn-warning">Powrót</a>
					</div>
					
				</fieldset>
				<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->id;?>
">
			</form>
			
			<br>	
		</div>	
	</div>

<?php
}
}
/* {/block 'kontent'} */
}
