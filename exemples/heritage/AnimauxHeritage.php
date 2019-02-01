<?php
/**
 * Created by PhpStorm.
 * User: sstienface
 * Date: 01/02/2019
 * Time: 15:09
 */

class AnimauxHeritage extends mysqli {



    public function __construct()
    {
        parent::__construct("localhost","root","","simon");

    }



    public function getAnimaux()
    {
        $result = $this->query("select nom from animaux where 1");
        $res = $result->fetch_assoc();
        return $res;
    }

} 