<?php
/* Smarty version 3.1.32-dev-1, created on 2017-06-26 21:18:11
  from "C:\xampp\htdocs\zad\p2\app\admin\users\UsersList.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-1',
  'unifunc' => 'content_59515df3ad1c66_10282760',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dea14f8e60a71375dce7dc41bbfb097eadccc020' => 
    array (
      0 => 'C:\\xampp\\htdocs\\zad\\p2\\app\\admin\\users\\UsersList.html',
      1 => 1498504343,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59515df3ad1c66_10282760 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2354859515df3ab1506_03126839', 'kontent');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_883759515df3ac01c3_67809545', 'tabela');
?>
	<?php }
/* {block 'kontent'} */
class Block_2354859515df3ab1506_03126839 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'kontent' => 
  array (
    0 => 'Block_2354859515df3ab1506_03126839',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="col-lg-9">
		<div class = "form-inline" style = "text-align: center; ;">
		<h3>Wprowadź login</h3>
		<form id="searchForm" class="pure-form pure-form-stacked" onsubmit="ajaxPostForm('searchForm','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
usersListPart','tab_people'); return false;">
				<input type="text" placeholder="login" name="sf_login" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->login;?>
" class = "form-control"> <br> <br>
				<button type="submit" class="btn btn-default">Szukaj</button>
		</form>
		</div><br>
<?php
}
}
/* {/block 'kontent'} */
/* {block 'tabela'} */
class Block_883759515df3ac01c3_67809545 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tabela' => 
  array (
    0 => 'Block_883759515df3ac01c3_67809545',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<?php $_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['conf']->value->root_path).("/app/admin/users/UsersListPart.html"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

	</div>
<?php
}
}
/* {/block 'tabela'} */
}
