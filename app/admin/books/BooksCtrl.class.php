<?php
require_once "BooksForm.class.php";

class BooksCtrl{
	private $form;
	private $records;
	
	public function __construct(){
		$this->form = new BooksForm();
	}
	
	public function process(){
		$where ["ORDER"] = "autor";
		$this->records = getDB()->select("ksiazka", [
				"id",
				"tytul",
				"autor",
				"gatunek",
				"ile",
			],$where  );
		$this->generateView();
	}
	
	
	public function generateView(){
		getSmarty()->assign('books',$this->records); // lista rekordów z bazy danych
		getSmarty()->display(getConf()->root_path.'/app/admin/books/booksView.html');		
	}
}