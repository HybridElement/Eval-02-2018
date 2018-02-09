<?php

if(isset($_POST['envoyer'])) {
    $tabErreur = array();
    $title = $_POST['title'];
    $actors = $_POST['actors'];
    $director = $_POST['director'];
    $producer = $_POST['producer'];
    $year = $_POST['year'];
    $lang = $_POST['lang'];
    $category = $_POST['category'];
    $syno = $_POST['syno'];
    $url = $_POST['url'];
                
        
    if(($_POST["title"] == "") || (str_len($title) < 6)) 
        array_push($tabErreur, "Veuillez saisir le nom du film");
    
    if($_POST["actors"] == "") || (str_len($actors) < 6))
        array_push($tabErreur, "Veuillez renseigner un ou plusieurs acteur(s)");
    
    if(($_POST["director"] == "") || (str_len($director) < 6))
        array_push($tabErreur, "Veuillez renseigner un ou plusieur réalisateur(s)");
    
    if(($_POST["producer"] == "") || (str_len($producer) < 6))
        array_push($tabErreur, "Veuillez renseigner un ou plusieur producteur(s)");
    
    if($_POST["year"] == "") 
        array_push($tabErreur, "Veuillez selectionner une année de production");
    
    if($_POST["lang"] == "")
        array_push($tabErreur, "Veuillez sélectionner une langue");
    
    if($_POST["category"] == "")
        array_push($tabErreur, "Veuillez sélectionner une catégorie");

    if(($_POST["syno"] == "") || (str_len($syno) < 6))
        array_push($tabErreur, "Veuillez entrer un synopsis");
            
    if(($_POST["url"] == "") || (filter_var($url, FILTER_VALIDATE_URL)){
        array_push($tabErreur, "Veuillez enter une url pour la bande annonce");
    }

    if (count($tabErreur) != 0) {
        $message = "<ul>";

        for($i=0 ; $i < count($tabErreur) ; $i++) {
            $message .= "<li>" .$tabErreur[$i] . "</li>";
        }

        $message .="</ul>";
        echo($message. "<br><br>");
        include("./include/formAjout.php");
}
else {

    $connexion = connexion();
    
    $requeteRecherche = "SELECT * FROM T_USERS WHERE USERMAIL = '$title'";

    $resultatRequeteRecherche = $connexion->query($requeteRecherche);

    $nombre_resultatRequeteRecherche  = $resultatRequeteRecherche-> rowCount();

    if($nombre_resultatRequeteRecherche == 0){
        $requete = "INSERT INTO movies (title, actors, director, producer, year_of_prod, language, categorie, storyline, video, ID) VALUES ('$title', '$actors', '$director', '$producer', '$year', '$lang', '$category', '$syno', '$url' NULL)";
        if ($resultatInscription = $connexion->exec($requete)) {
            echo "Votre film à bien été ajouter à notre catalogue" ;
            unset($connexion);
        }
        else {
            echo "Ce film fait déjà parti de notre catalogue";
        }
    else {
        include("./include/formAjout.php");;
    }
