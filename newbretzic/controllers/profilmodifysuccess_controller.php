<?php
include_once '_classes/Announces.php';

// Destruction profil
if(!empty($_POST) && isset($_POST['btn-deleteprofil'])) {
    $idDelete = $_POST['btn-deleteprofil'];
    Announces::deleteProfil($idDelete);

    session_unset(); // Désactive la session
    session_destroy(); // Détruit la session
    setcookie('log', '', time()-3444, '/', null, false, true); // Efface le cookie
}

