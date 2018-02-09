<?php

function connexion(){
	// var_dump($dsn);
	
	try {
		$db = new PDO(URL, LOGIN, PASSWORD);	
		//creationLogFile($id_user,$action);		
		return $db;
	}

	catch (PDOException $e){
		// echo ($e -> getMessage());

		$file = fopen("./files/echecConnexionBDD.log", "a+");
		$date = date("d-m-Y H:i:s");
		
		$texte = "echec de connexion a la BDD le ". $date ." erreur : " . $e -> getMessage() .".\n\r";
		fwrite($file,$texte);
		fclose($file);

	}

}