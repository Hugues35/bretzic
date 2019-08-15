<?php
include_once '_classes/Stylezic.php';
include_once '_classes/Festivals.php';

$allStylezic = Stylezic::getAllStylezic();
//$allFestivals = Festivals::getAllFestivals();

// Formulaire envoi nouveau concert
if(!empty($_POST) && isset($_POST['btn-newconcert'])){
    if(isset($_POST['concert-establishment']) && isset($_POST['btn-newconcert'])){
        if(!empty($_POST['concert-establishment']) && !empty($_POST['btn-newconcert'])){

            $day = str_secur($_POST['concert-day']);
            $establishment = str_secur($_POST['concert-establishment']);
            $town = str_secur($_POST['concert-town']);
            $address = str_secur($_POST['concert-address']);
            $department = str_secur($_POST['concert-dpt']);
            $groupname = str_secur($_POST['concert-groupname']);
            $link = str_secur($_POST['concert-link']);
            $style = str_secur($_POST['concert-style']);
            $lat = str_secur($_POST['concert-lat']);
            $lon = str_secur($_POST['concert-lon']);
            
            $query = "INSERT INTO concerts(day, establishment, town, address, department, groupname, groupsite, style, lat, lon) VALUES(\"$day\", \"$establishment\", \"$town\", \"$address\", \"$department\", \"$groupname\", \"$link\", \"$style\", \"$lat\", \"$lon\")";
            $requete = $db->prepare($query);
            $requete->execute(array($day, $establishment, $town, $address, $department, $groupname, $link, $style , $lat, $lon));
            $validation = 'Le concert a bien été ajouté !';
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