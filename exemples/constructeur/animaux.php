<?php
/**
 * Created by PhpStorm.
 * User: sstienface
 * Date: 01/02/2019
 * Time: 14:00
 */

class Animaux {

    protected $db;

    /**
     * On se connecte à la base de donnée directement dans le constructeur, c'est la façon la plus simple de procéder
     */

    public function __construct()
    {
        //Les valeurs sont à remplacer bien entendu
        $this->db = new mysqli("localhost","root","","simon");

        if ($this->db->connect_errno) {
            echo "Echec lors de la connexion à MySQL : (" . $this->db->connect_errno . ") " . $this->db->connect_error;
        }
    }

    public function getAnimaux()
    {
        $result = $this->db->query("select nom from animaux where 1");
        $res = $result->fetch_assoc();
        return $res;
    }

} 