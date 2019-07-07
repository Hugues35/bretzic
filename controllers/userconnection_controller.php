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
// if(!empty($_POST) && isset($_POST['btn-userconnect'])){
//     if(isset($_POST['email']) && isset($_POST['password'])){
//         if(!empty($_POST['email']) && !empty($_POST['password'])){
           
//             $passwordConnect = str_secur($_POST['password']);      
//             $emailConnec = str_secur($_POST['email']);
           
//             $pass_hache = password_hash($passwordConnect, PASSWORD_DEFAULT);

//             $oneUser = Announces::getAllAnnounces($email, $password);

//             // Comparaison des données envoyées par le formulaire avec la base
//             if ($pass_hache == $oneUser['password'] && $passwordConnect == $oneUser['email']){
               
//                 $_SESSION['pseudo'];
//                 $success = 'Vous êtes connecté !';
//             }
        
//         }else{
//             $error = "Vous devez remplir tous les champs !";
//         }
//     }else{
//         $error = "Une erreur s'est produite. Essayez à nouveau !";
//     }
// }