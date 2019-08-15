<?php

include_once '_classes/Concerts.php';

$allConcerts = Concerts::getAllConcerts();
$allConcertsJson = Concerts::getConcertsJson();


