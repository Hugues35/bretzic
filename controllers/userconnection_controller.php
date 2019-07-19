<?php
include_once '_classes/Towns.php';
include_once '_classes/Instruments.php';
include_once '_classes/Stylezic.php';
include_once '_classes/Announces.php';

$allAnnounces = Announces::getAllAnnounces();

$allTowns = Towns::getAllTowns();
$allInstruments = Instruments::getAllInstruments();
$allStylezic = Stylezic::getAllStylezic();
