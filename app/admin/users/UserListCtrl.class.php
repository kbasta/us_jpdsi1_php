<?php
require_once getConf()->root_path.'/app/admin/users/UserSearchForm.class.php';

class UserListCtrl {

	private $form; 
	private $records; 

	public function __construct(){
		$this->form = new UserSearchForm();
	}
		
	public function validate() {
		$this->form->login = getFromRequest('sf_login');
		loadMessages();
		
		return ! getMessages()->isError();
	}
	
	public function process(){
		$this->validate();
		
		$search_params = []; 
		if ( isset($this->form->login) && strlen($this->form->login) > 0) {
			$search_params['login[~]'] = $this->form->login.'%'; 
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
			);

		if (getDB()->error()[0]!=0){ 
			getMessages()->addMessage(new Message('Wystąpił błąd podczas pobierania rekordów',Message::ERROR));
			if (getConf()->debug) getMessages()->addMessage(new Message(var_export(getDB()->error(), true),Message::ERROR));
		}
		getSmarty()->assign('searchForm',$this->form); 
		getSmarty()->assign('users',$this->records); 
	}
	
	public function validateEdit() {
		$this->form->id = getFromRequest('id',true,'Błędne wywołanie aplikacji');
		return ! getMessages()->isError();
	}
	
	public function goDelete(){		
		if ( $this->validateEdit() ){
			getDB()->delete("uzytkownik",[
				"id" => $this->form->id
			]);
		if (getDB()->error()[0]!=0){ 
				getMessages()->addMessage(new Message('Wystąpił nieoczekiwany błąd podczas usuwania rekordu',Message::ERROR));
				if (getConf()->debug) getMessages()->addMessage(new Message(var_export(getDB()->error(), true),Message::ERROR));
			} else {
				getMessages()->addMessage(new Message('Pomyślnie usunięto rekord',Message::INFO));
			}
		}
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
	
	function goShow(){
		$this->process();
		getSmarty()->display(getConf()->root_path.'/app/admin/users/UserList.html');
	}
	
	function goShowPart(){ 
		$this->process();
		getSmarty()->display(getConf()->root_path.'/app/admin/users/UserListPart.html');
	}	
}
