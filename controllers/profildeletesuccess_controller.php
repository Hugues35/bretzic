<?php
include_once '_classes/Announces.php';

if(!empty($_POST) && isset($_POST['btn-deleteprofil'])) {
    $idDelete = $_POST['btn-festivaldelete'];
    Announces::deleteProfil($idDelete);
}