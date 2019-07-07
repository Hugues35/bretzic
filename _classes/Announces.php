<?php

class Announces
{

    public $id;
    public $date;
    public $pseudo;
    public $password;
    public $email;
    public $birthyear;
    public $town;
    public $sex;
    public $status;
    public $situation;
    public $instrument;
    public $style;
    public $experience;
    public $groupname;
    public $weblink;
    public $presentation;
    public $title_announce;
    public $message;
    public $status_announce;
    public $situation_announce;



    /**
     * Categories constructor.
     * @param $id
     */
    function __construct($id) {

        global $db;

        $id = str_secur($id);

        $reqAnnouncement = $db->prepare('SELECT * FROM users WHERE id = ?');
        $reqAnnouncement->execute([$id]);
        $data = $reqAnnouncement->fetch();

        $this->id = $id;
        $this->date = $date;
        $this->pseudo = $data['pseudo'];
        $this->password = $data['password'];
        $this->email = $data['email'];
        $this->birthyear = $data['birthyear'];
        $this->town = $data['town'];
        $this->sex = $data['sex'];
        $this->status = $data['status'];
        $this->situation = $data['situation'];
        $this->instrument = $data['instrument'];
        $this->style = $data['style'];
        $this->experience = $data['experience'];
        $this->groupname = $data['groupname'];
        $this->weblink = $data['weblink'];
        $this->presentation = $data['presentation'];
        $this->title_announce = $data['title_announce'];
        $this->message = $data['message'];
        $this->status_announce = $data['status_announce'];
        $this->situation_announce = $data['situation_announce'];

    }


    /**
     * Envoi de toutes les annonces
     * @return array
     */
    public static function getAllAnnounces() {

        global $db;

        $reqAnnounces = $db->prepare('SELECT * FROM users ORDER BY id DESC');
        $reqAnnounces->execute([]);
        return $reqAnnounces->fetchAll();
    }

    /**
     * Envoi de annonces par utilisateur
     * @return array
     */
    public static function getAnnouncebyuser() {

        global $db;

        $reqAnnounces = $db->prepare('SELECT * FROM users WHERE pseudo = $_SESSION["pseudo"]');
        $reqAnnounces->execute([]);
        return $reqAnnounces->fetchAll();
    }


    /* Modification contenu profil / annonce */
    public static function modifyProfil($id, $newmessage){
        global $db;
        
        $query = "UPDATE users SET message = ?";
        $requete = $db->prepare($query);
        $requete->execute([$newmessage, $id]);
        sleep(1);
        unset($_POST);
    }


    /* Suppression profil */
    public static function deleteProfil($idDelete){
        global $db;
        
        $query = "DELETE FROM users WHERE id = $idDelete";
        $requete = $db->prepare($query);
        $requete->execute();
        sleep(1);
        unset($_POST);
    }


    static function getUserpseudo($pseudo){
        global $db;

        $reqPseudoUsers = $db->prepare('SELECT * FROM users where pseudo = ?');
        $reqPseudoUsers->execute([$pseudo]);
        $user = $reqPseudoUsers->fetch();
        if ($user === false){
            return "";
        } else {
            return $user;
        }
    }

}