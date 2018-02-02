<?php
/* Smarty version 3.1.32-dev-1, created on 2017-06-26 22:59:45
  from "C:\xampp\htdocs\zad\bibliotekaBastaProjekt\app\admin\users\UserList.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-1',
  'unifunc' => 'content_595175c1962277_17973219',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0bcb2bb785366b5db0a59ac5b0d814424d90d37' => 
    array (
      0 => 'C:\\xampp\\htdocs\\zad\\bibliotekaBastaProjekt\\app\\admin\\users\\UserList.html',
      1 => 1498507359,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595175c1962277_17973219 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8906595175c1950679_03694635', 'kontent');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3131595175c195a8c0_81167651', 'tabela');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ($_smarty_tpl->tpl_vars['conf']->value->root_path).("/templates/main.html"));
}
/* {block 'kontent'} */
class Block_8906595175c1950679_03694635 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'kontent' => 
  array (
    0 => 'Block_8906595175c1950679_03694635',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div  id = "content" class = "col-lg-9">
		<div class = "form-inline" style = "text-align: center; ;">
			<h3>Wprowadź login szukanej osoby</h3>
			<form id="searchForm" class="pure-form pure-form-stacked" onsubmit="ajaxPostForm('searchForm','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
usersListPart','tab_people'); return false;">
					<input type="text" placeholder="login" name="sf_login" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->login;?>
" class = "form-control "><br><br>
					<button type="submit" class="btn btn-default">Szukaj</button>
			</form>
		</div><br>	
<?php
}
}
/* {/block 'kontent'} */
/* {block 'tabela'} */
class Block_3131595175c195a8c0_81167651 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tabela' => 
  array (
    0 => 'Block_3131595175c195a8c0_81167651',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php $_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['conf']->value->root_path).("/app/admin/users/UserListPart.html"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

	</div>
<?php
}
}
/* {/block 'tabela'} */
}
