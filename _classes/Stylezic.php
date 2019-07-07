<?php

class Stylezic
{

    public $id;
    public $style;
   

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
    public function getStyle()
    {
        return $this->style;
    }


    /* Récupération des données de la table stylezic */
    public static function getAllStylezic(){
        global $db;

        $reqStylezic = $db->prepare("SELECT * FROM stylezic");
        $reqStylezic->execute([]);
        return $reqStylezic->fetchAll();
    }

}