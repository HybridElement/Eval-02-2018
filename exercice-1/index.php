<?php 
$coordonnees = array( 
    "Prenom" => "Florent", 
    "Nom" => "Bance", 
    "Adresse" => "19 rue Hélène Boucher",
    "Code postal" => "76800",
    "Ville" => "Saint Etienne du Rouvray",
    "Email" => "banceflorent@gmail.com",
    "Telephone" => "+33642284103",
    "Date de naissance" => date('1989-02-08'),
);

$date = $coordonnees["Date de naissance"];
$date = new DateTime('1989-02-08');

foreach($coordonnees as $cle => $valeur) {
    echo "<b>$cle -</b> $valeur </br>";
}

echo $date->format('d-m-Y');


?>