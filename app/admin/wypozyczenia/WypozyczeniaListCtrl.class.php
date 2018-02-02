<?php
require_once getConf()->root_path.'/app/admin/wypozyczenia/WypozyczeniaSearchForm.class.php';

class WypozyczeniaListCtrl {

	private $form; 
	private $records;
	
	public function __construct(){
		$this->form = new WypozyczeniaSearchForm();
	}
		
	public function validate() {
		$this->form->login = getFromRequest('sf_login');
		$this->form->NW = getFromRequest('sf_NW');
		loadMessages();
		return ! getMessages()->isError();
	}
	
	public function process(){
		$this->validate();
		$search_params = []; 
		if ( isset($this->form->login) && strlen($this->form->login) > 0) {
			$search_params['login[~]'] = $this->form->login.'%'; 
		}
		if ( isset($this->form->NW) && strlen($this->form->NW) > 0) {
			$search_params['idWyp[~]'] = $this->form->NW.'%'; 
		}
		$num_params = sizeof($search_params);
		if ($num_params > 1) {
			$where = [ "AND" => &$search_params ];
		} else {
			$where = &$search_params;
		}
		$where ["ORDER"] = ["idWyp" => "DESC"];
		$this->records = getDB()->select("wypozyczenie", [
				"[><]ksiazka" => ["bookid" => "id"],
				"[><]uzytkownik" => ["userid" => "id"]
		], [
				"idWyp",
				"userid",
				"bookid",
				"login",
				"tytul",
				"autor",
				"status",
				"data_wyp",
				"data_od",
				"kara"
			], $where );
		if (getDB()->error()[0]!=0){ 
			getMessages()->addMessage(new Message('Wystąpił błąd podczas pobierania rekordów',Message::ERROR));
			if (getConf()->debug) getMessages()->addMessage(new Message(var_export(getDB()->error(), true),Message::ERROR));
		}
		
		getSmarty()->assign('searchForm',$this->form); 
		getSmarty()->assign('wyp',$this->records);  
	}
	
	public function wypozyczyl(){
		$this->form->id = getFromRequest('id',true,'Błędne wywołanie aplikacji');
		getDB()->update("wypozyczenie", [
			"status" => "wypozyczony"
		], [
			"idWyp" => $this->form->id
		]);
		
		redirectTo("wypozyczeniaShow");
	}
	
	public function oddal(){
		$this->form->id = getFromRequest('id',true,'Błędne wywołanie aplikacji');
		$this->form->bookid = getFromRequest('idb',true,'Błędne wywołanie aplikacji');
		getDB()->update("wypozyczenie", [
			"data_od" => date( "Y-m-d", strtotime( "now" )),
			"status" => "oddany"
		], [
			"idWyp" => $this->form->id
		]);
		getDB()->update("ksiazka", [
			"ile[+]" => 1
		], [
			"id" => $this->form->bookid
		]);
		redirectTo("wypozyczeniaShow");
	}
	
	function goShow(){
		$this->process();
		getSmarty()->display(getConf()->root_path.'/app/admin/wypozyczenia/WypozyczeniaList.html');
	}
	
	function goShowPart(){
		$this->process();
		getSmarty()->display(getConf()->root_path.'/app/admin/wypozyczenia/WypozyczeniaListPart.html');
	}	
}
