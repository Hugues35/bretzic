<?php

include_once '_classes/Announces.php';

$allAnnounces = Announces::getAllAnnounces();



// Formulaire inscription
if(!empty($_POST) && isset($_POST['btn-inscrip'])){
    if(isset($_POST['pseudo'])){
        if(!empty($_POST['pseudo'])){

            $pseudo = str_secur($_POST['pseudo']);
            $password = str_secur($_POST['password']);
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


            $message .= ' - nouvelle inscription par: ' . $pseudo;
            debug($message);

            // Envoi emails
            mail('huguesfleury35133@gmail.com', 'Inscription', $message);
            mail($email, 'Votre inscription a bien été enregistrée sur www.bretzic.com. Merci !', $message);

            // Affiche un message de confirmation d'envoi
            echo 'Bonjour ' . $_POST['pseudo'].' Votre inscription a bien été ajoutée. Merci !';

            // Enregistrement des données dans la table "messages"
            $requete = $bdd->prepare('INSERT INTO users(pseudo, password, email, birthyear, town, sex, status, situation, instrument, style, experience, groupname, weblink, presentation,title_announce, message, status_announce, situation_announce) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
            $requete->execute(array($pseudo, $password, $email, $birthyear, $town, $sex, $status, $situation, $instrument, $style, $experience, $groupname, $weblink, $presentation));

        }else{
            $error = "Vous devez remplir tous les champs !";
        }
    }else{
        $error = "Une erreur s'est produite. Essayez à nouveau !";
    }
}