<?php
require_once getConf()->root_path.'/app/users/search/SearchSearchForm.class.php';

class SearchListCtrl {

	private $form; 
	private $records; 
	
	public function __construct(){
		$this->form = new SearchSearchForm();
	}
		
	public function validate() {
		$this->form->tytul = getFromRequest('sf_tytul');
		$this->form->autor = getFromRequest('sf_autor');
		$this->form->gatunek = getFromRequest('sf_gatunek');
	
		loadMessages();
		
		return ! getMessages()->isError();
	}
	
	public function process(){
		$this->validate();
		
		$search_params = []; 
		if ( isset($this->form->tytul) && strlen($this->form->tytul) > 0) {
			$search_params['tytul[~]'] = $this->form->tytul.'%'; 
		}
		if ( isset($this->form->autor) && strlen($this->form->autor) > 0) {
			$search_params['autor[~]'] = $this->form->autor.'%'; 
		}
		if ( isset($this->form->gatunek) && strlen($this->form->gatunek) > 0) {
			$search_params['gatunek[~]'] = $this->form->gatunek.'%';
		}
		$num_params = sizeof($search_params);
		if ($num_params > 1) {
			$where = [ "AND" => &$search_params ];
		} else {
			$where = &$search_params;
		}
		
		$where ["ORDER"] = "tytul";
		
		$this->records = getDB()->select("ksiazka", [
				"id",
				"tytul",
				"autor",
				"gatunek",
				"ile",
			], $where );
		if (getDB()->error()[0]!=0){ 
			getMessages()->addMessage(new Message('Wystąpił błąd podczas pobierania rekordów',Message::ERROR));
			if (getConf()->debug) getMessages()->addMessage(new Message(var_export(getDB()->error(), true),Message::ERROR));
		}
		
		getSmarty()->assign('searchForm',$this->form);
		getSmarty()->assign('books',$this->records); 
	}
	
	public function wypozycz(){
		$this->form->id = getFromRequest('id',true,'Błędne wywołanie aplikacji');
		
		getDB()->insert("wypozyczenie", [
			"userid" => getFromSession('_currentUser'),
			"bookid" => $this->form->id,
			"data_wyp" => date( "Y-m-d", strtotime( "now" )),
			"data_od" => date( "Y-m-d", strtotime( "+30 days" )),
			"status" => "oczekiwany"
		]);
		getDB()->update("ksiazka", [
			"ile[-]" => 1
		],[
			"id" => $this->form->id 
		]);

		redirectTo("positionsShow");
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
