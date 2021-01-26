<?php

	class Controller{
		function __construct()
		{
			$this->view=new View;
			$this->form=new Form;
			$this->bilgi=new Bilgi;
		}
		
		// ihtiyacımız olan model'i dahil ediyoruz
		function Modelyukle($name){
			$yol='model/'.$name.'_model.php';
			if(file_exists($yol)){
				require $yol;
				$modelsinifName=$name.'_model';
				$this->model=new $modelsinifName;
			}
			
		}
	}



?>