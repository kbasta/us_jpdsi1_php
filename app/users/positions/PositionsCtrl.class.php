<?php

class PositionsCtrl{
	private $form;
	

	public function validateEdit() {
		$this->form->id = getFromRequest('id',true,'Błędne wywołanie aplikacji');
		return ! getMessages()->isError();
	}	
		
	public function przedluz(){
		if ( $this->validateEdit() ){
				getDB()->update("wypozyczenie", ["data_od" => date( "Y-m-d", strtotime( "+30 days" ))],[
					"idWyp" => $this->form->id
				]);
		}
		forwardTo('positionsShow');	
	}	
		
	public function process(){
		$this->info = getDB()->get("uzytkownik", ["imie","nazwisko","kara"] , ["id" => getFromSession('_currentUser')]);
		
		$where ["ORDER"] = ["status" => "DESC"];
		
		$this->records = getDB()->select("wypozyczenie", [
				"[><]ksiazka" => ["bookid" => "id"]
			],[
				"idWyp",
				"userid",
				"bookid",
				"autor",
				"tytul",
				"data_od",
				"status"
			],[ 
			"ORDER" => ["status" => "DESC"],
			"userid" => getFromSession('_currentUser')
			]);
		$this->generateView();
	}	
	
	public function generateView(){
		getSmarty()->assign('infoUser',$this->info);
		getSmarty()->assign('books',$this->records);  
		getSmarty()->display(getConf()->root_path.'/app/users/positions/positionsView.html');		
	}
}