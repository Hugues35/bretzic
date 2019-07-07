<?php

class Instruments
{

    public $id;
    public $instrument;
   

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getInstrument()
    {
        return $this->instrument;
    }


    /* Récupération des données de la table instrument */
    public static function getAllInstruments(){
        global $db;

        $reqInstruments = $db->prepare("SELECT * FROM instrument");
        $reqInstruments->execute([]);
        return $reqInstruments->fetchAll();
    }

}