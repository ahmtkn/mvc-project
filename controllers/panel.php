<?php

	class panel extends Controller{
		
		function __construct()
		{
			parent::__construct();
			
			$this->Modelyukle('login');
			
			Session::init();
			
			if(Session::get('kulad')==false){
				Session::destroy();
				header('Location:'.URL.'/login/Form');
				exit;
			}else{
				$this->view->goster('panel/index');
			}
		}
		
		function cikis()
		{
			Session::destroy();
			header('Location:'.URL.'/login/Form');
		}
	}



?>