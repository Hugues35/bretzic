<?php

include_once '_classes/Festivals.php';

$allFestivals = Festivals::getAllFestivals();


// Formulaire envoi nouveau festival
if(!empty($_POST) && isset($_POST['btn-newfestival'])){
    if(isset($_POST['festival-name']) && isset($_POST['btn-newfestival'])){
        if(!empty($_POST['festival-name']) && !empty($_POST['btn-newfestival'])){

            $name = str_secur($_POST['festival-name']);
            $date_beginning = str_secur($_POST['festival-beginning']);
            $date_end = str_secur($_POST['festival-end']);
            $town = str_secur($_POST['festival-town']);
            $department = str_secur($_POST['festival-dpt']);
            $site_link = str_secur($_POST['festival-link']);
            $lat = str_secur($_POST['festival-lat']);
            $lon = str_secur($_POST['festival-lon']);
            
            $query = "INSERT INTO festivals(name, date_beginning, date_end, town, department, site_link, lat, lon) VALUES(\"$name\", \"$date_beginning\", \"$date_end\", \"$town\", \"$department\", \"$site_link\", \"$lat\", \"$lon\")";
            $requete = $db->prepare($query);
            $requete->execute(array($name, $date_beginning, $date_end, $town, $department, $site_link, $lat, $lon));
            $validation = 'Le festival a bien été ajouté !';
            sleep(1);
            unset($_POST);

        } else{
            $error = "Vous devez remplir tous les champs !";
        }
    }
    else{
        $error = "Une erreur s'est produite. Essayez à nouveau !";
    }
}