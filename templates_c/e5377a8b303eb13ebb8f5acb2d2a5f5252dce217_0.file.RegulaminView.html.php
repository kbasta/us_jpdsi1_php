<?php
/* Smarty version 3.1.32-dev-1, created on 2017-06-27 10:04:49
  from "C:\xampp\htdocs\zad\bibliotekaBastaProjekt\app\users\regulamin\RegulaminView.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-1',
  'unifunc' => 'content_595211a1ecf225_23917222',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5377a8b303eb13ebb8f5acb2d2a5f5252dce217' => 
    array (
      0 => 'C:\\xampp\\htdocs\\zad\\bibliotekaBastaProjekt\\app\\users\\regulamin\\RegulaminView.html',
      1 => 1498494844,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595211a1ecf225_23917222 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_27257595211a1eca147_95762448', 'kontent');
?>
	<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ($_smarty_tpl->tpl_vars['conf']->value->root_path).("/templates/main.html"));
}
/* {block 'kontent'} */
class Block_27257595211a1eca147_95762448 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'kontent' => 
  array (
    0 => 'Block_27257595211a1eca147_95762448',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div id = "content" class = "col-lg-9">
		<h3 style="text-align:center;">Regulamin Biblioteki Basta</h3>
		<ol>
			<li>Wypożyczonych książek nie należy niszczyć. Jeżeli stan zwracanej książki okaże się wątpliwy, bibliotekarz ma prawo, wycenić szkody. Zwracający zobowiązany jest wtedy do wypłacenia kary natychmiastowej.</li>
			<li>Użytkownik ma obowiązek oddania książki po 30. dniach od wypożyczenia. Po tym czasie zostanie nałożona kara w wysokości 10 zł, którą użytkownik zobowiązany jest wpłacić do kasy biblioteki.</li>
			<li>Jeżeli czytelnik nie posiada wymaganej ilośći gotówki, możliwym jest wymiana starej książki na nową. Należy przy tym pamiętać, że owa książka musi być w stanie co najmniej dobrym.</li>
			<li>Jeżeli czytelnik zgubił (nie posiada już) książki, którą wypożyczył zobowiązany jest do natychmiastowego wpłacenia do kasy biblioteki kary w wysokości 50 zł lub przekaznia nowej książki na rzecz biblioteki.</li>
			<li>Nie zastosowanie się osoby do powyższych zasad, może skutkować usunięciem jej z listy naszych czytelników.</li>
			<li>Wypożyczający ma prawo przedłużyć okres wypożyczenia książek na 30 dni.</li>	
			<li>Podczas wypożyczania i oddania książek, czytelnik zobowiązany jest podać swój login lub numer wypożyczenia (NR) pracownikowi biblioteki.</li>
			<li>Dobrowolne przekazanie książki jest mile widziane.</li>
			
			<li>Czytelniku, nie bądź cebula, oddaj książkę.</li>
		</ol>
	</div>

	
<?php
}
}
/* {/block 'kontent'} */
}
