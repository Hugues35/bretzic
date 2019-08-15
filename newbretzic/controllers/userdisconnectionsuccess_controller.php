<?php

if(!empty($_POST) && isset($_POST['btn-userdisconnect'])){
    session_unset(); // Désactive la session
    session_destroy(); // Détruit la session
    setcookie('log', '', time()-3444, '/', null, false, true); // Efface le cookie
}