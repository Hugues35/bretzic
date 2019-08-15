<?php

include_once '_classes/Concerts.php';

$allConcerts = Concerts::getAllConcerts();

if(!empty($_POST) && isset($_POST['btn-concertmodify'])) {
    
    $id = $_POST['id'];
    $newday = $_POST['day-modify'];
    $newestablishment = $_POST['establishment-modify'];
    $newaddress = $_POST['address-modify'];
    $newtown = $_POST['town-modify'];
    $newdepart = $_POST['depart-modify'];
    $newgroupname = $_POST['groupname-modify'];
    $newstyle = $_POST['style-modify']; 
    $newgroupsite = $_POST['groupsite-modify'];
    $newlat = $_POST['lat-modify'];
    $newlon = $_POST['lon-modify'];
    Concerts::modifyConcert($id, $newday, $newestablishment, $newaddress, $newtown, $newdepart, $newgroupname, $newstyle, $newgroupsite, $newlat, $newlon);

    $modify = 1;
}

if(!empty($_POST) && isset($_POST['btn-concertdelete'])) {
    $idDelete = $_POST['btn-concertdelete'];
    Concerts::deleteConcert($idDelete);

    $modify = 0;
}