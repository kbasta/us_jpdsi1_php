<?php
require_once getConf()->root_path.'/app/admin/users/UsersForm.class.php';

class UsersCtrl{
	private $form;
	private $records;
	
	public function __construct(){
		$this->form = new UsersForm();
	}
		
	public function getParams(){
		$this->form->login = getFromRequest('sf_login');
	}
	
	public function validate() {
		return ! getMessages()->isError();
	}
	
	public function process(){
		$this->getparams();
		$this->validate();
		$search_params = []; //przygotowanie pustej struktury (aby była dostępna nawet gdy nie będzie zawierała wierszy)
		if ( isset($this->form->login) && strlen($this->form->login) > 0) {
			$search_params['login[~]'] = $this->form->login.'%'; // dodanie symbolu % zastępuje dowolny ciąg znaków na końcu
		}
		$num_params = sizeof($search_params);
		if ($num_params > 1) {
			$where = [ "AND" => &$search_params ];
		} else {
			$where = &$search_params;
		}
		$where ["ORDER"] = ["kara" => "DESC"];
		$this->records = getDB()->select("uzytkownik", [
				"id",
				"imie",
				"nazwisko",
				"login",
				"kara"
			], $where
				//"id" => getFromSession('_currentUser')
			);

		// 5. Wygenerowanie widoku
		getSmarty()->assign('searchForm',$this->form);    // dane formularza (wyszukiwania w tym wypadku)
		getSmarty()->assign('users',$this->records); // lista rekordów z bazy danych;
	}
	
	
	public function validateEdit() {
		//pobierz parametry na potrzeby wyswietlenia danych do edycji
		//z widoku listy osób (parametr jest wymagany)
		$this->form->id = getFromRequest('id',true,'Błędne wywołanie aplikacji');
		return ! getMessages()->isError();
	}
	
	public function goDelete(){		
		// 1. walidacja id osoby do usuniecia
		if ( $this->validateEdit() ){
		  // 2. usunięcie rekordu
			getDB()->delete("uzytkownik",[
				"id" => $this->form->id
			]);
		if (getDB()->error()[0]!=0){ //jeśli istnieje kod błędu
				getMessages()->addMessage(new Message('Wystąpił nieoczekiwany błąd podczas usuwania rekordu',Message::ERROR));
				if (getConf()->debug) getMessages()->addMessage(new Message(var_export(getDB()->error(), true),Message::ERROR));
			} else {
				getMessages()->addMessage(new Message('Pomyślnie usunięto rekord',Message::INFO));
			}
		}
		
		// 3. Przekierowanie na stronę listy osób
		forwardTo('usersShow');		
	}
	
	public function zeruj(){
		if ( $this->validateEdit() ){
			getDB()->update("uzytkownik", ["kara" => "0"],[
				"id" => $this->form->id
			]);
		}	
		forwardTo('usersShow');	
	}
	
	public function generateView(){
		getSmarty()->assign('searchForm',$this->form);    // dane formularza (wyszukiwania w tym wypadku)
		getSmarty()->assign('users',$this->records); // lista rekordów z bazy danych
		getSmarty()->display(getConf()->root_path.'/app/admin/users/usersView.html');		
	}
	
	function goShow(){
		$this->process();
		getSmarty()->display(getConf()->root_path.'/app/users/search/searchList.html');
	}
	
	function goShowPart(){ 
		$this->process();
		getSmarty()->display(getConf()->root_path.'/app/users/search/SearchListPart.html');
	}	
}