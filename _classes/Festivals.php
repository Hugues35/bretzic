<?php

class Festivals
{

    public $id;
    public $name;
    public $beginning;
    public $end;
    public $town;
    public $department;
    public $sitelink;


    /**
     * Categories constructor.
     * @param $id
     */
    function __construct($id) {

        global $db;

        $id = str_secur($id);

        $reqFestivals = $db->prepare('SELECT * FROM festivals WHERE id = ?');
        $reqFestivals->execute([$id]);
        $data = $reqFestivals->fetch();

        $this->id = $id;
        $this->name = $data['name'];
        $this->beginning = $data['date_beginning'];
        $this->end = $data['date_end'];
        $this->town = $data['town'];
        $this->department = $data['department'];
        $this->sitelink = $data['site_link'];
        $this->lat = $data['lat'];
        $this->lon = $data['lon'];
    }

    /**
     * Récupération de tous les festivals
     * @return array
     */
    public static function getAllFestivals() {

        global $db;

        $reqFestivals = $db->prepare('SELECT * FROM festivals ORDER BY date_beginning');
        $reqFestivals->execute([]);
        return $reqFestivals->fetchAll();
    } 


    /**
     * Récupération de tous les festivals
     * @return array
     */
    public static function getFestivalsJson() {

        global $db;

       $reqFestivals = $db->prepare('SELECT * FROM festivals');
        $reqFestivals->execute([]);
        return $reqFestivals->fetchAll();
        
    } 

    /* Modification contenu festival */
    public static function modifyFestival($id, $newdatebegin, $newdateend, $newname, $newtown, $newdepart, $newwebsite, $newlat, $newlon){
        global $db;
        
        $query = "UPDATE festivals SET date_beginning = ?, date_end = ?, name = ?, town = ?, department = ?, site_link = ?, lat = ?, lon = ? WHERE id = $id";
        $requete = $db->prepare($query);
        $requete->execute([$newdatebegin, $newdateend, $newname, $newtown, $newdepart, $newwebsite, $newlat, $newlon]);
        sleep(1);
        unset($_POST);
    }

    /* Suppression d'un festival */
    public static function deleteFestival($idDelete){
        global $db;
        
        $query = "DELETE FROM festivals WHERE id = $idDelete";
        $requete = $db->prepare($query);
        $requete->execute();
        sleep(1);
        unset($_POST);
    }
}