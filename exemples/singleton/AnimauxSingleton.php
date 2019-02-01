<?php
/**
 * Created by PhpStorm.
 * User: sstienface
 * Date: 01/02/2019
 * Time: 15:00
 */

class AnimauxSingleton {

    protected $db;
    protected $mysqli;

    public function __construct()
    {
        $this->db = Database::getInstance();
        $this->mysqli = $this->db->getConnection();

    }

    public function getAnimaux()
    {
        $result = $this->mysqli->query("select nom from animaux where 1");
        $res = $result->fetch_assoc();
        return $res;
    }
} 