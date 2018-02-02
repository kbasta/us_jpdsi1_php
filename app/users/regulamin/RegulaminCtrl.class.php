<?php

class RegulaminCtrl{
	
	public function generateView(){
		getSmarty()->display(getConf()->root_path.'/app/users/regulamin/RegulaminView.html');		
	}
}