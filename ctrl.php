<?php
require_once 'init.php';

getConf()->login_action = 'loginShow'; 

switch ($action){
	case 'loginShow':
		control('/app/login/','LoginCtrl','generateView'); 
	case 'login':
		control('/app/login/','LoginCtrl','doLogin'); 
	case 'logout':
		control('/app/login/','LoginCtrl','doLogout'); 
	case 'signupShow':
		control('/app/signup/','SignupCtrl','generateView');
	case 'signup':	
		control('/app/signup/','SignupCtrl','doSignup');
	/**USERS**/	
		
	case 'positionsShow' :
		control('/app/users/positions/','PositionsCtrl','process',['user']);
	case 'bookPrz' :	
		control('/app/users/positions/','PositionsCtrl','przedluz',['user']);
	case 'regulaminShow' :
		control('/app/users/regulamin/','RegulaminCtrl','generateView',['user']);
	case 'adminShow' :
		control('/app/powitanie/','AdminCtrl','generateView',['user','admin']);	
	case 'searchShow' :
		control('/app/users/search/','SearchListCtrl','goShow',['user']);	
	case 'searchListPart': 
		control('/app/users/search/','SearchListCtrl','goShowPart',['user']); 		
	case 'wypozycz' :	
		control('/app/users/search/','SearchListCtrl','wypozycz',['user']);		
	/**ADMIN**/	
		
	case 'wypozyczeniaShow' :
		control('/app/admin/wypozyczenia/','WypozyczeniaListCtrl','goShow',['admin']);
	case 'wypozyczeniaListPart':
		control('/app/admin/wypozyczenia/','WypozyczeniaListCtrl','goShowPart',['admin']);
	case 'wypozyczyl' :	
		control('/app/admin/wypozyczenia/','WypozyczeniaListCtrl','wypozyczyl',['admin']);
	case 'oddal' :	
		control('/app/admin/wypozyczenia/','WypozyczeniaListCtrl','oddal',['admin']);
	case 'usersShow' :
		control('/app/admin/users/','UserListCtrl','goShow',['admin']);
	case 'usersListPart' :
		control('/app/admin/users/','UserListCtrl','goShowPart',['admin']);
	case 'usersDelete' :
		control('/app/admin/users/','UserListCtrl','goDelete',['admin']);
	case 'zeruj' :
		control('/app/admin/users/','UserListCtrl','zeruj',['admin']);
	case 'booksShow' :
		control('/app/admin/books/','BooksCtrl','process',['admin']);
	case 'booksDelete':
		control('/app/admin/books/edit/','BooksEditCtrl','goDelete',['admin']); 
	case 'booksNew':
		control('/app/admin/books/edit/','BooksEditCtrl','generateView',['admin']); 
	case 'booksEdit':
		control('/app/admin/books/edit/','BooksEditCtrl','goEdit',['admin']); 
	case 'booksSave':
		control('/app/admin/books/edit/','BooksEditCtrl','goSave',['admin']); 		

	default : 
		control('/app/login/','LoginCtrl','generateView'); 
}