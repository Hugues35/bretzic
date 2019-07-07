<?php

class Towns
{

    public $id;
    public $town;
    public $departnum;
    public $departname;
    

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
    public function getTown()
    {
        return $this->town;
    }

    /**
     * @return mixed
     */
    public function getDepartnum()
    {
        return $this->departnum;
    }

    /**
     * @return mixed
     */
    public function getDepartname()
    {
        return $this->departname;
    }

   


    /**
     * Messages constructor.
     * @param $id
     */
    /*function __construct($id)
    {

        global $db;

        $id = str_secur($id);

        $reqChapter = $db->prepare('SELECT * FROM chapters WHERE id = ?');
        $reqChapter->execute([$id]);
        $data = $reqChapter->fetch();

        if ($data == false) {
            $this->id = "Error";
            $this->date = "Error";
            $this->author = "Error";
            $this->story = "Error";
            $this->category = "Error";
        } else {
            $this->id = $data['id'];
            $this->date = $data['date'];
            $this->author = $data['author'];
            $this->story = $data['story'];
            $this->category = $data['category'];
        }

    }*/

    /* Récupération des données de la table location */
    public static function getAllTowns(){
        global $db;

        $reqTowns = $db->prepare("SELECT * FROM location");
        $reqTowns->execute([]);
        return $reqTowns->fetchAll();
    }

}