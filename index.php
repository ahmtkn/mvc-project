<?php
	
	function dosyaload($className)
	{
		$dosyayolu=__DIR__ .'/libs/'.$className.'.php';
		
		include ($dosyayolu);
	}
	
	spl_autoload_register('dosyaload');
	
	require 'config/genel.php';
	require 'config/database.php';
	
	$boots=new boots;
	

	
		


?>