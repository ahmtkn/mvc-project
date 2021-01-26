<?php

	class View{
		function __construct()
		{
			
		}
		public function goster($dosyaad,$data=null,$yonlen=null)
		{
			require 'views/'.$dosyaad.'.php';
		}
	}





?>