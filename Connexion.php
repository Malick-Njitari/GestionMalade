<?php		
	try {
	    $con = new PDO("mysql:host=localhost;dbname=gestioncovid",
	        "root", "");
			// echo 'connection etablie';
		
	}catch (Exception $e){
		die('Erreur : ' . $e->getMessage());	
		// echo 'connection impossble';
	}	
?>