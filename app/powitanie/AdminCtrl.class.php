<?php

class AdminCtrl{

	public function generateView(){
		getSmarty()->display(getConf()->root_path.'/app/powitanie/adminView.html');		
	}
}