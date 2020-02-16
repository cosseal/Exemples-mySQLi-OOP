<?php
/**
 * Created by PhpStorm.
 * User: sstienface
 * Date: 01/02/2019
 * Time: 14:07
 */

class AnimauxParam {

    protected $mysqli;

    public function __construct(Db $dbObj)
    {
        
        $this->mysqli = $dbObj->db;
    }

    public function getAnimaux()
    {

        $result = $this->mysqli->query("select nom from animaux where 1");
        $res = $result->fetch_assoc();
        return $res;
    }
} 
