<?php

$usd=1.085965;

if(isset($_POST['valide'])) {
    if(($_POST["valeur"] == "") || (filter_var($_POST["valeur"], FILTER_VALIDATE_INT) == false) || (filter_var($_POST["valeur"], FILTER_VALIDATE_FLOAT) == false))
        echo "Veuillez saisir un montant.";  

    else {
        $valeur = $_POST['valeur'];
        $resultat = $_POST['valeur']*$usd;
 
        echo $_POST['valeur'] . " euros = " . $resultat . " dollars américains.";
           
    }
}
