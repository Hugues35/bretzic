<?php

// Récupération de la classe
include_once '_classes/Admin.php';

unset($success);
unset($error);


// Suppression des session / cookies
if(isset($_POST['btnDisconnec'])){
    session_unset(); // Désactive la session
    session_destroy(); // Détruit la session

    setcookie('admin_connected', "", -1, '/');


    // Suppression de la valeur du cookie dans la variable $_COOKIE
    unset($_COOKIE['admin_connected']);

    //setcookie('admin_connected');
    unset($_SESSION['admin']);
    unset($_SESSION['admin_connected']);

}

if (!isset($_COOKIE['admin_connected'])) {
// Formulaire connection
    if(!empty($_POST) && isset($_POST['btnConnexion'])){
        if(isset($_POST['username']) && isset($_POST['password'])){
            if(!empty($_POST['username']) && !empty($_POST['password'])){

                $username = str_secur($_POST['username']);
                $password = str_secur($_POST['password']);

                $oneAdmin = Admin::getAdminWithUsername($username);
                $isCorrectPassword = password_verify($password, $oneAdmin['password']);

                // Comparaison des données envoyées par le formulaire avec la base
                if ($isCorrectPassword){
                    $adminInformationsPubliques = Admin::getPublicInfo($oneAdmin['id']);
                    $_SESSION['admin'] = $adminInformationsPubliques;
                    $success = 'Vous êtes connecté !';
                    if (isset($_POST['connect'])) {
                        setcookie('admin_connected', $adminInformationsPubliques['key'], time() + 365 * 24 * 3600, '/', null, false, true);
                    }
                }
                else {
                    $error = 'Mauvais identifiant ou mot de passe !';
                }

            }else {
                $error = "Vous devez remplir tous les champs !";
            }
        }else {
            $error = "Une erreur s'est produite. Essayez à nouveau !";
        }
    }
} else {
    $isCorrectAdmin = Admin::getAdminByKey($_COOKIE['admin_connected']);
    if ($isCorrectAdmin) {
        $adminInformationsPubliques = Admin::getPublicInfoByKey($_COOKIE['admin_connected']);
        $_SESSION['admin'] = $adminInformationsPubliques;
        $success = 'Vous êtes connecté !';
    } else {
        $error = "Cookie invalide";
    }
}
