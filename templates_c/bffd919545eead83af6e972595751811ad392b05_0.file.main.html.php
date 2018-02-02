<?php
/* Smarty version 3.1.32-dev-1, created on 2018-02-02 18:09:36
  from "C:\xampp\htdocs\zad\bibliotekaBastaProjekt\templates\main.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-1',
  'unifunc' => 'content_5a749b50eb68a7_59173992',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bffd919545eead83af6e972595751811ad392b05' => 
    array (
      0 => 'C:\\xampp\\htdocs\\zad\\bibliotekaBastaProjekt\\templates\\main.html',
      1 => 1517591019,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a749b50eb68a7_59173992 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">

<head>
	<meta charset="utf-8"/>
	<title>Biblioteka Basta</title>
	
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/lib/bootstrap-3.3.7-dist/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/styl.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/style.css">
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/functions.js"><?php echo '</script'; ?>
>
	
</head>
<body>
	<div id = "naglowek" class = "col-lg-12">
		<img src = "<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
\css\gf\book.png">
	</div>
	<div id = "kontener" class = "col-lg-13">
		<?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) > 0) {?>
			<div id = "menu" class = "col-lg-3 col-sm-6">
				<ul>
					<?php if (($_smarty_tpl->tpl_vars['conf']->value->roles == array('user'))) {?>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
positionsShow">Moje pozycje</a></li>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
searchShow">Szukaj</a></li>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
regulaminShow">Regulamin</a></li>
					<?php } else { ?>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
wypozyczeniaShow">Wypożyczenia</a></li>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
booksShow">Książki</a></li>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
usersShow">Użytkownicy</a></li>
					<?php }?>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout">Wyloguj</a></li>
				</ul>
			</div>
		<?php }?>
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_291565a749b50c7bea9_28535679', 'kontent');
?>

		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_98055a749b50cba9a2_88224145', 'tabela');
?>

	</div>
		
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_299545a749b50cbcbc9_33420222', 'messages');
?>

	
	


		
	<div id = "stopka" class = "col-lg-12">
		<p>&copy; Kamil Basta</p>
	</div>
</body>
</html><?php }
/* {block 'kontent'} */
class Block_291565a749b50c7bea9_28535679 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'kontent' => 
  array (
    0 => 'Block_291565a749b50c7bea9_28535679',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		
		
		<?php
}
}
/* {/block 'kontent'} */
/* {block 'tabela'} */
class Block_98055a749b50cba9a2_88224145 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tabela' => 
  array (
    0 => 'Block_98055a749b50cba9a2_88224145',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'tabela'} */
/* {block 'messages'} */
class Block_299545a749b50cbcbc9_33420222 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'messages' => 
  array (
    0 => 'Block_299545a749b50cbcbc9_33420222',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


		<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isMessage()) {?>
		<div style = "" class="messages col-lg-offset-4 col-lg-4">
		<ul>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
?>
			<li class="msg <?php if ($_smarty_tpl->tpl_vars['msg']->value->isError()) {?>error<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isWarning()) {?>warning<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isInfo()) {?>info<?php }?>"><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
</li>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

		</ul>
	</div>
	<?php }?>

	<?php
}
}
/* {/block 'messages'} */
}
