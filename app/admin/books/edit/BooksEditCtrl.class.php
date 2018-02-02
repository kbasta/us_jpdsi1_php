<?php
require_once "BooksEditForm.class.php";

class BooksEditCtrl {

	private $form; 
	
	public function __construct(){
		$this->form = new BooksEditForm();
	}

	public function validateSave() {
		$this->form->id = getFromRequest('id',true,'Błędne wywołanie aplikacji');
		$this->form->tytul = getFromRequest('tytul',true,'Błędne wywołanie aplikacji');
		$this->form->autor = getFromRequest('autor',true,'Błędne wywołanie aplikacji');
		$this->form->gatunek = getFromRequest('gatunek',true,'Błędne wywołanie aplikacji');
		$this->form->ile = getFromRequest('ile',true,'Błędne wywołanie aplikacji');

		if ( getMessages()->isError() ) return false;

		if (empty(trim($this->form->tytul))) {
			getMessages()->addMessage(new Message('Wprowadź tytul',Message::ERROR));
		}
		if (empty(trim($this->form->autor))) {
			getMessages()->addMessage(new Message('Wprowadź autora',Message::ERROR));
		}
		if (empty(trim($this->form->gatunek))) {
			getMessages()->addMessage(new Message('Wprowadź gatunek',Message::ERROR));
		}
		if (empty(trim($this->form->ile))) {
			getMessages()->addMessage(new Message('Wprowadź liczbe sztuk',Message::ERROR));
		}
		
		if ( getMessages()->isError() ) return false;
		return ! getMessages()->isError();
	}

	public function validateEdit() {
		$this->form->id = getFromRequest('id',true,'Błędne wywołanie aplikacji');
		return ! getMessages()->isError();
	}
	
	public function goEdit(){
		if ( $this->validateEdit() ){
			$record = getDB()->get("ksiazka", "*",[
				"id" => $this->form->id
			]);
			if (getDB()->error()[0]==0){
				$this->form->id = $record['id'];
				$this->form->tytul = $record['tytul'];
				$this->form->autor = $record['autor'];
				$this->form->gatunek = $record['gatunek'];
				$this->form->ile = $record['ile'];
			} else { 
				getMessages()->addMessage(new Message('Wystąpił nieoczekiwany błąd podczas odczytu rekordu',Message::ERROR));
				if (getConf()->debug) getMessages()->addMessage(new Message(var_export(getDB()->error(), true),Message::ERROR));
			}
		} 
		
		$this->generateView();		
	}

	public function goDelete(){		
		if ( $this->validateEdit() ){
			getDB()->delete("ksiazka",[
				"id" => $this->form->id
			]);
		if (getDB()->error()[0]!=0){
				getMessages()->addMessage(new Message('Wystąpił nieoczekiwany błąd podczas usuwania rekordu',Message::ERROR));
				if (getConf()->debug) getMessages()->addMessage(new Message(var_export(getDB()->error(), true),Message::ERROR));
			} else {
				getMessages()->addMessage(new Message('Pomyślnie usunięto rekord',Message::INFO));
			}
		}
		
		forwardTo('booksShow');		
	}

	public function goSave(){
			
		if ($this->validateSave()) {
			if ($this->form->id == '') {
				if ($this->form->tytul == getDB()->get("ksiazka", "tytul", [ "tytul" => $this->form->tytul ]) &&
					$this->form->autor == getDB()->get("ksiazka", "autor", [ "autor" => $this->form->autor ])) {
					getMessages()->addMessage(new Message('Tytuł już istnieje w spisie.',Message::ERROR));
				}		
				else {
					$count = getDB()->count("ksiazka");
					if ($count <= 500) {
						getDB()->insert("ksiazka", [
							"tytul" => $this->form->tytul,
							"autor" => $this->form->autor,
							"gatunek" => $this->form->gatunek,
							"ile" => $this->form->ile
						]);
					} else { 
						getMessages()->addMessage(new Message('Ograniczenie: Zbyt dużo rekordów. Aby dodać nowy usuń wybrany wpis.',Message::WARNING));
						$this->generateView(); 
						exit(); 
					}
				}	
			} else { 
				getDB()->update("ksiazka", [
					"tytul" => $this->form->tytul,
					"autor" => $this->form->autor,
					"gatunek" => $this->form->gatunek,
					"ile" => $this->form->ile
				], [ 
					"id" => $this->form->id
				]);
			}
			if (getDB()->error()[0]!=0){
				getMessages()->addMessage(new Message('Wystąpił nieoczekiwany błąd podczas zapisu rekordu',Message::ERROR));
				if (getConf()->debug) getMessages()->addMessage(new Message(var_export(getDB()->error(), true),Message::ERROR));
			}
			forwardTo('booksShow');
		} else {
			$this->generateView();
		}		
	}
	
	public function generateView(){
		getSmarty()->assign('form',$this->form);   
		getSmarty()->display(getConf()->root_path.'/app/admin/books/edit/booksEdit.html');
	}
}
 