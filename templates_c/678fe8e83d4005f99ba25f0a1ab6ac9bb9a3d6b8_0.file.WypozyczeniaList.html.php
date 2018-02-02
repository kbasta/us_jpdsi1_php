<?php
/* Smarty version 3.1.32-dev-1, created on 2017-06-26 22:59:46
  from "C:\xampp\htdocs\zad\bibliotekaBastaProjekt\app\admin\wypozyczenia\WypozyczeniaList.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-1',
  'unifunc' => 'content_595175c282f327_74066273',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '678fe8e83d4005f99ba25f0a1ab6ac9bb9a3d6b8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\zad\\bibliotekaBastaProjekt\\app\\admin\\wypozyczenia\\WypozyczeniaList.html',
      1 => 1498507582,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595175c282f327_74066273 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8598595175c281d917_81932422', 'kontent');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12567595175c2827780_79859598', 'tabela');
?>
	<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ($_smarty_tpl->tpl_vars['conf']->value->root_path).("/templates/main.html"));
}
/* {block 'kontent'} */
class Block_8598595175c281d917_81932422 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'kontent' => 
  array (
    0 => 'Block_8598595175c281d917_81932422',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="col-lg-9">
		<div class = "form-inline" style = "text-align: center; ;">
		<h3>Wpisz login lub numer wypożycenia (NW)</h3>
		<form id="searchForm" class="pure-form pure-form-stacked" onsubmit="ajaxPostForm('searchForm','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
wypozyczeniaListPart','tab_people'); return false;">
				<input type="text" placeholder="login" name="sf_login" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->login;?>
" class = "form-control">
				<input type="text" placeholder="NW" name="sf_NW" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->NW;?>
" class = "form-control"> <br> <br>
				<button type="submit" class="btn btn-default">Szukaj</button>
		</form>
		</div><br>
<?php
}
}
/* {/block 'kontent'} */
/* {block 'tabela'} */
class Block_12567595175c2827780_79859598 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tabela' => 
  array (
    0 => 'Block_12567595175c2827780_79859598',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<?php $_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['conf']->value->root_path).("/app/admin/wypozyczenia/WypozyczeniaListPart.html"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

	</div>
<?php
}
}
/* {/block 'tabela'} */
}
