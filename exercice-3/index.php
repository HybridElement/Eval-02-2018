<?php

	session_start();

    include_once "./fonctions/connexionBDD.php";
    include_once "./Bin/conf_connexion.php"; //fichier de définition des constantes de connexion à la BDD

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./assets/css/screen.css">
    <script src="./assets/js/fonctions.js"></script>
    <title>Mon Cinema</title>
</head>

<body>
	<?php include_once("./include/header.php"); ?>

		<main>
		<h1>Films répertoriés</h1>
		<?php include_once("./include/formAjout.php"); ?>
			
		</main>
			
	<?php include_once("./include/footer.php"); ?>
</body>



<!-- GOOGLE FONT -->
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400" rel="stylesheet">

	
</html>