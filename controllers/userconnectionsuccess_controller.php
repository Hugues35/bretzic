<?php
// include_once '_classes/Towns.php';
// include_once '_classes/Instruments.php';
// include_once '_classes/Stylezic.php';
include_once '_classes/Announces.php';

$allAnnounces = Announces::getAllAnnounces();

// $allTowns = Towns::getAllTowns();
// $allInstruments = Instruments::getAllInstruments();
// $allStylezic = Stylezic::getAllStylezic();

//Formulaire de connexion
if(!empty($_POST) && isset($_POST['btn-userconnect'])){
    if(isset($_POST['pseudo']) && isset($_POST['password'])){
        if(!empty($_POST['pseudo']) && !empty($_POST['password'])){
           
            $passwordConnect = str_secur($_POST['password']);      
            $pseudoConnect = str_secur($_POST['pseudo']);
           
            $_SESSION['pseudo'] = $_POST['pseudo'];
            //$pass_hache = password_hash($passwordConnect, PASSWORD_DEFAULT);

            foreach ($allAnnounces as $index1 => $allarticles) :
                $oneUser = $allarticles['pseudo'];
                $onepassword = $allarticles['password'];
            endforeach;   

            //$oneUser = Announces::getUserpseudo($pseudo);
            $isCorrectPassword = password_verify($passwordConnect, $onepassword);


            // Comparaison des données envoyées par le formulaire avec la base
            //if ($pass_hache == $oneUser['password'] && $pseudoConnect == $oneUser['pseudo']){
            if ($isCorrectPassword){
                $_SESSION['pseudo'] = $pseudoConnect;
                echo "Vous êtes connecté !";
            }else{
                $error = "Mauvais identifiant ou mot de passe !";
            }
        
        }else{
            $error = "Vous devez remplir tous les champs !";
        }
    }else{
        $error = "Une erreur s'est produite. Essayez à nouveau !";
    }
}