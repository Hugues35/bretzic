<?php

class Concerts
{

    public $id;
    public $date;
    public $establishment;
    public $address;
    public $town;
    public $department;
    public $groupname;
    public $style;
    public $groupsite;
    public $lat;
    public $lon;


    /**
     * Categories constructor.
     * @param $id
     */
    function __construct($id) {

        global $db;

        $id = str_secur($id);

        $reqConcerts = $db->prepare('SELECT * FROM concerts WHERE id = ?');
        $reqConcerts->execute([$id]);
        $data = $reqConcerts->fetch();

        $this->id = $id;
        $this->date = $data['day'];
        $this->establishment = $data['establishment'];
        $this->address = $data['address'];
        $this->town = $data['town'];
        $this->department = $data['department'];
        $this->groupname = $data['groupname'];
        $this->style = $data['style'];
        $this->groupsite = $data['groupsite'];
        $this->lat = $data['lat'];
        $this->lon = $data['lon'];
    }

    /**
     * Récupération de tous les concerts
     * @return array
     */
    public static function getAllConcerts() {

        global $db;

        $reqConcerts = $db->prepare('SELECT * FROM concerts ORDER BY day');
        $reqConcerts->execute([]);
        return $reqConcerts->fetchAll();
    } 


    /**
     * Récupération de tous les concerts
     * @return array
     */
    public static function getConcertsJson() {

        global $db;

        $reqConcerts = $db->prepare('SELECT * FROM concerts');
        $reqConcerts->execute([]);
        return $reqConcerts->fetchAll();
        
    } 

    /* Modification contenu concert */
    public static function modifyConcert($id, $newday, $newestablishment, $newaddress, $newtown, $newdepart, $newgroupname, $newstyle, $newgroupsite, $newlat, $newlon){
        global $db;
        
        $query = "UPDATE concerts SET day = ?, establishment = ?, address = ?, town = ?, department = ?, groupname = ?, style = ?, groupsite = ?, lat = ?, lon = ? WHERE id = $id";
        $requete = $db->prepare($query);
        $requete->execute([$newday, $newestablishment, $newaddress, $newtown, $newdepart, $newgroupname, $newstyle, $newgroupsite, $newlat, $newlon]);
        sleep(1);
        unset($_POST);
    }

    /* Suppression d'un concert */
    public static function deleteConcert($idDelete){
        global $db;
        
        $query = "DELETE FROM concerts WHERE id = $idDelete";
        $requete = $db->prepare($query);
        $requete->execute();
        sleep(1);
        unset($_POST);
    }   

}