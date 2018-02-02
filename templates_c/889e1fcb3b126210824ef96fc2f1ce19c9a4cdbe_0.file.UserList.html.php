<?php
/* Smarty version 3.1.32-dev-1, created on 2017-06-26 22:02:40
  from "C:\xampp\htdocs\zad\p2\app\admin\users\UserList.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-1',
  'unifunc' => 'content_59516860ac01b0_52914875',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '889e1fcb3b126210824ef96fc2f1ce19c9a4cdbe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\zad\\p2\\app\\admin\\users\\UserList.html',
      1 => 1498507359,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59516860ac01b0_52914875 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1467059516860aabb80_28744078', 'kontent');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2315159516860ab8290_01706884', 'tabela');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ($_smarty_tpl->tpl_vars['conf']->value->root_path).("/templates/main.html"));
}
/* {block 'kontent'} */
class Block_1467059516860aabb80_28744078 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'kontent' => 
  array (
    0 => 'Block_1467059516860aabb80_28744078',
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
class Block_2315159516860ab8290_01706884 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tabela' => 
  array (
    0 => 'Block_2315159516860ab8290_01706884',
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
