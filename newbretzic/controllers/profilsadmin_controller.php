<?php
include_once '_classes/Towns.php';
include_once '_classes/Instruments.php';
include_once '_classes/Stylezic.php';
include_once '_classes/Announces.php';

$allAnnounces = Announces::getAllAnnounces();

$allTowns = Towns::getAllTowns();
$allInstruments = Instruments::getAllInstruments();
$allStylezic = Stylezic::getAllStylezic();


// Formulaire inscription
if(!empty($_POST) && isset($_POST['btn-modifyuser'])){
    if(isset($_POST['pseudo'])){
        if(!empty($_POST['pseudo'])){

            $pseudo = str_secur($_POST['pseudo']);
            $password = str_secur($_POST['password']);
            $passwordconfirm = str_secur($_POST['password-confirm']);
            $email = str_secur($_POST['email']);
            $birthyear = str_secur($_POST['birthyear']);
            $town = str_secur($_POST['location']);
            $sex = str_secur($_POST['sex']);
            $status = str_secur($_POST['status']);
            $situation = str_secur($_POST['situation']);
            $instrument = str_secur($_POST['instrument']);
            $style = str_secur($_POST['style']);
            $experience = str_secur($_POST['experience']);
            $groupname = str_secur($_POST['groupname']);
            $weblink = str_secur($_POST['weblink']);
            $presentation = str_secur($_POST['message']);
            $titleannounce = str_secur($_POST['title-announce']);
            $messannounce = str_secur($_POST['mess-announce']);
            $statusannounce = str_secur($_POST['status-announce']);
            $situationannounce = str_secur($_POST['situation-announce']);


            if($password != $passwordconfirm){
                $error = "Les mots de passe sont différents !";
 
            } else {

                $pass_hache = password_hash($password, PASSWORD_DEFAULT);

                // Test si mail utilisé
                $req = $db->prepare("SELECT count(*) as numberEmail FROM users WHERE email = ?");
                $req->execute(array($email));
         
                while($email_verification = $req->fetch()){
                    if($email_verification['numberEmail'] != 0) {
                        header('location: index.php?error=1&email=1');
                        exit();
                    }
                }

                // Affiche un message de confirmation d'envoi
                echo 'Bonjour ' . $_POST['pseudo'].' Votre inscription a bien été ajoutée. Merci !';

                // Envoi de la requête la table "users"
                $query = "INSERT INTO users(pseudo, password, email, birthyear, town, sex, status, situation, instrument, style, experience, groupname, weblink, presentation,title_announce, message, status_announce, situation_announce) VALUES(\"$pseudo\", \"$pass_hache\", \"$email\", \"$birthyear\", \"$town\", \"$sex\", \"$status\", \"$situation\", \"$instrument\", \"$style\", \"$experience\", \"$groupname\", \"$weblink\", \"$presentation\", \"$titleannounce\", \"$messannounce\", \"$statusannounce\", \"$situationannounce\")";
                $requete = $db->prepare($query);
                $requete->execute(array($pseudo, $pass_hache, $email, $birthyear, $town, $sex, $status, $situation, $instrument, $style, $experience, $groupname, $weblink, $presentation, $titleannounce, $messannounce, $statusannounce, $situationannounce));

                sleep(1);
                unset($_POST);
            }
        
        }else{
            $error = "Vous devez remplir tous les champs !";
        }
    }else{
        $error = "Une erreur s'est produite. Essayez à nouveau !";
    }
}