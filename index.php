<?php
/**
 * Created by PhpStorm.
 * User: sstienface
 * Date: 04/12/2018
 * Time: 11:25
 */

// Les différentes instances des classes

//Dossier constructeur, la méthode la plus simple



include "exemples/constructeur/animaux.php";
$animaux = new Animaux();
$animauxListe = $animaux->getAnimaux();
var_dump($animauxListe);




//Dossier parametre, on instancie d'abord la classe db puis on passe l'objet en parametre

include "exemples/parametre/Db.php";
include "exemples/parametre/Animaux.php";
$dbObj = new Db();
$animaux = new AnimauxParam($dbObj);
$animauxListe = $animaux->getAnimaux();
var_dump($animauxListe);


//Par heritage de l'objet mysqli, pas franchement recommandé sous cette forme mais peut être interessant avec une classe
// intermédiaire par ex : class mysqliDB etc...
include "exemples/heritage/AnimauxHeritage.php";
$animaux = new AnimauxHeritage();
$animauxListe = $animaux->getAnimaux();
var_dump($animauxListe);



// En utilisant un singleton ( design pattern )
include "exemples/singleton/Database.php";
include "exemples/singleton/AnimauxSingleton.php";

$animaux = new AnimauxSingleton();
$animauxListe = $animaux->getAnimaux();
var_dump($animauxListe);






