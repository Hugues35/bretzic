<?php

include_once '_classes/Festivals.php';

$allFestivals = Festivals::getAllFestivals();

if(!empty($_POST) && isset($_POST['btn-festivalmodify'])) {
	
    $id = $_POST['id'];
    $newdatebegin = $_POST['datebegin-modify'];
    $newdateend = $_POST['dateend-modify'];
    $newname = $_POST['name-modify'];
    $newtown = $_POST['town-modify'];
    $newdepart = $_POST['depart-modify'];
    $newwebsite = $_POST['site-modify'];
    $newlat = $_POST['lat-modify'];
    $newlon = $_POST['lon-modify'];
	Festivals::modifyFestival($id, $newdatebegin, $newdateend, $newname, $newtown, $newdepart, $newwebsite, $newlat, $newlon);

}
