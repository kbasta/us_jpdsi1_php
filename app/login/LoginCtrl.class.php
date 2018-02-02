<?php
require_once "LoginForm.class.php";

class LoginCtrl{
	private $form;
	
	public function __construct(){
		$this->form = new LoginForm();
	}
		
	public function validate() {
		$this->form->login = getFromRequest('login',true,'Błędne wywołanie systemu');
		$this->form->pass = getFromRequest('pass',true,'Błędne wywołanie systemu');

		if (getMessages()->isError()) return false;
		
		if (empty($this->form->login)) {
			getMessages()->addMessage(new Message('Nie podano loginu',Message::ERROR));
		}
		
		if (empty($this->form->pass)) {
			getMessages()->addMessage(new Message('Nie podano hasła',Message::ERROR));
		}

		if (getMessages()->isError()) return false;
		
		if ($this->form->login == getDB()->get("uzytkownik", "login", [ "login" => $this->form->login, "rola" => "admin"]) && 
				$this->form->pass == getDB()->get("uzytkownik", "haslo", ["haslo" => $this->form->pass, "rola" => "admin"]) &&
				getDB()->get("uzytkownik", "id", ["login" => $this->form->login]) ==  getDB()->get("uzytkownik", "id", ["haslo" => $this->form->pass])) {
			addRole('admin');
			$this->addUserID();
		} else if ($this->form->login == getDB()->get("uzytkownik", "login", [ "login" => $this->form->login, "rola" => "user"]) && 
				$this->form->pass == getDB()->get("uzytkownik", "haslo", ["haslo" => $this->form->pass, "rola" => "user"]) &&
				getDB()->get("uzytkownik", "id", ["login" => $this->form->login]) ==  getDB()->get("uzytkownik", "id", ["haslo" => $this->form->pass])) {
			addRole('user');
			$this->addUserID();
		} else {
			getMessages()->addMessage(new Message('Niepoprawny login lub hasło',Message::ERROR));
		}
		
		return ! getMessages()->isError();
	}
	
	public function doLogin(){
		if ($this->validate()){
			redirectTo("adminShow");
		} else {
			$this->generateView(); 
		}		
	}
	
	public function doLogout(){
		session_destroy();
		session_start(); 
		redirectTo('loginShow');
	}
	
	public function addUserID(){
			$_SESSION['_currentUser'] = getDB()->get("uzytkownik", "id", [ "login" => $this->form->login]);
	}
	
	public function generateView(){
		getSmarty()->assign('form',$this->form);
		getSmarty()->display(getConf()->root_path.'/app/login/LoginView.html');		
	}
}