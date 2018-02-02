<?php
/* Smarty version 3.1.32-dev-1, created on 2017-06-27 10:04:41
  from "C:\xampp\htdocs\zad\bibliotekaBastaProjekt\app\users\search\searchList.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-1',
  'unifunc' => 'content_595211991e9f00_21254154',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e53d95e2e905ff175f1cdecb875ff6e4c7616f2a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\zad\\bibliotekaBastaProjekt\\app\\users\\search\\searchList.html',
      1 => 1498507285,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595211991e9f00_21254154 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_49895952119916c8d9_51437819', 'kontent');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4722595211991777e1_59374485', 'tabela');
?>
	<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ($_smarty_tpl->tpl_vars['conf']->value->root_path).("/templates/main.html"));
}
/* {block 'kontent'} */
class Block_49895952119916c8d9_51437819 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'kontent' => 
  array (
    0 => 'Block_49895952119916c8d9_51437819',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="col-lg-9">
		<div class = "form-inline" style = "text-align: center; ;">
		<h3>Szukajka</h3>
		<form id="searchForm" class="pure-form pure-form-stacked" onsubmit="ajaxPostForm('searchForm','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
searchListPart','tab_people'); return false;">
				<input type="text" placeholder="tytuł" name="sf_tytul" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->tytul;?>
" class = "form-control"> 
				<input type="text" placeholder="autor" name="sf_autor" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->autor;?>
" class = "form-control"> 
				<input type="text" placeholder="gatunek" name="sf_gatunek" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->gatunek;?>
" class = "form-control"> <br> <br>
				<button type="submit" class="btn btn-default">Szukaj</button>
		</form>
		</div><br>
<?php
}
}
/* {/block 'kontent'} */
/* {block 'tabela'} */
class Block_4722595211991777e1_59374485 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tabela' => 
  array (
    0 => 'Block_4722595211991777e1_59374485',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<?php $_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['conf']->value->root_path).("/app/users/search/SearchListPart.html"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

	</div>
<?php
}
}
/* {/block 'tabela'} */
}
