<?php
include_once '_classes/Announces.php';

$allAnnounces = Announces::getAllAnnounces();

//Formulaire de connexion
if(!empty($_POST) && isset($_POST['btn-userconnect'])){
    if(isset($_POST['pseudo']) && isset($_POST['password'])){
        if(!empty($_POST['pseudo']) && !empty($_POST['password'])){
           
            $passwordConnect = str_secur($_POST['password']);      
            $pseudoConnect = str_secur($_POST['pseudo']);

            $oneUser = Announces::getUserpseudo($pseudoConnect);
            $isCorrectPassword = password_verify($passwordConnect, $oneUser['password']);

            // Comparaison des données envoyées par le formulaire avec la base
            if ($isCorrectPassword){
                $_SESSION['pseudo'] = $pseudoConnect;
                $connected = "Vous êtes connecté !";
            }else{
                unset($_SESSION);
                $error = "Mauvais identifiant ou mot de passe !";
            }

        }else{
            $error = "Vous devez remplir tous les champs !";
        }
    }else{
        $error = "Une erreur s'est produite. Essayez à nouveau !";
    }
}