<?php
require_once "SignupForm.class.php";

class SignupCtrl {

	private $form; 

	public function __construct(){
		$this->form = new SignupForm();
	}

	public function validateSave() {
		$this->form->id = getFromRequest('id',true,'Błędne wywołanie aplikacji1');
		$this->form->name = getFromRequest('imie',true,'Błędne wywołanie aplikacji2');
		$this->form->surname = getFromRequest('nazwisko',true,'Błędne wywołanie aplikacji3');
		$this->form->login = getFromRequest('login',true,'Błędne wywołanie aplikacji4');
		$this->form->password = getFromRequest('password',true,'Błędne wywołanie aplikacji6');
		
		if ( getMessages()->isError() ) return false;

		if (empty(trim($this->form->name))) {
			getMessages()->addMessage(new Message('Wprowadź imię.',Message::ERROR));
		}
		if (empty(trim($this->form->surname))) {
			getMessages()->addMessage(new Message('Wprowadź nazwisko.',Message::ERROR));
		}
		if (empty(trim($this->form->login))) {
			getMessages()->addMessage(new Message('Wprowadź login.',Message::ERROR));
		}
		if (empty(trim($this->form->password))) {
			getMessages()->addMessage(new Message('Wprowadź haslo.',Message::ERROR));
		}
		
		if ($this->form->login == getDB()->get("uzytkownik", "login", [ "login" => $this->form->login ])){
			getMessages()->addMessage(new Message('Login już zajęty.',Message::ERROR));
		}
		
		/*if ($this->form->email == getDB()->get("uzytkownik", "mail", [ "mail" => $this->form->email ])){
			getMessages()->addMessage(new Message('Adres e-mail już zajęty.',Message::ERROR));
		}
		*/
		
		if ($this->form->login == $this->form->password){
			getMessages()->addMessage(new Message('Hasło nie może być takie samo jak login!',Message::ERROR));
		}
		
		return ! getMessages()->isError();
	}
	

	public function doSignup(){
		if ($this->validateSave()) {
			if ($this->form->id == '') {
				$count = getDB()->count("uzytkownik");
				if ($count <= 500) {
					getDB()->insert("uzytkownik", [
						"imie" => $this->form->name,
						"nazwisko" => $this->form->surname,
						"login" => $this->form->login,
						"haslo" => $this->form->password,
						"rola" => "user"
					]);
				} else { 
					getMessages()->addMessage(new Message('Ograniczenie: Zbyt dużo rekordów. Aby dodać nowy usuń wybrany wpis.',Message::WARNING));
					$this->generateView(); 
					exit(); 
				}
			}
			if (getDB()->error()[0]!=0){ 
				getMessages()->addMessage(new Message('Wystąpił nieoczekiwany błąd podczas zapisu rekordu',Message::ERROR));
				if (getConf()->debug) getMessages()->addMessage(new Message(var_export(getDB()->error(), true),Message::ERROR));
			} else {
				getMessages()->addMessage(new Message('Rejestracja zakończona pomyślnie. Możesz teraz zalogować się.',Message::INFO));
			}
			forwardTo('loginShow');
		} else {
			$this->generateView();
		}		
	}
	
	public function generateView(){
		getSmarty()->assign('form',$this->form);    
		getSmarty()->display(getConf()->root_path.'/app/signup/signupView.html');
	}
}
 