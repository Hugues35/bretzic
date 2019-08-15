<?php

if(!empty($_POST) && isset($_POST['btnContact'])){
    if(isset($_POST['email']) && isset($_POST['firstname']) && isset($_POST['message'])){
        if(!empty($_POST['email']) && !empty($_POST['firstname']) && !empty($_POST['message'])){
            $email = str_secur($_POST['email']);
            $firstname = str_secur($_POST['firstname']);
            $message = str_secur($_POST['message']);

            $message .= ' - email envoyé par: ' . $firstname . ' : ' . $email;

            mail('huguesfleury35133@gmail.com', 'Message du site Bretzic', $message);

            $validation = 'Bonjour ' . $firstname .'. Nous traiterons votre message dès que possible. Merci !';
        }else{
            $error = "Vous devez remplir tous les champs !";
        }
    }else{
        $error = "Une erreur s'est produite. Reessayez !";
    }
}
