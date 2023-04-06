<?php

include("Carti.php");
$carte = new Carti();

// pentru a accesa proprietatile si metodele in exteriorul clasei folosim $nume_obiect-> 
// operatorul obiect: -> sau operatorul dart: -> .  In alte limbaje se foloseste .

$carte->setTitlu('Carte de OOP PHP 7');
$carte->setAutor('Autor Anonim');
echo $carte->getTitlu();
echo $carte->getAutor();




include ('Casa.php');

// folosim cuvantul rezervat (cuvantul cheie) new pentru a crea o instanta a clasei
// pentru a genera un obiect
$casa_mea = new Casa();

$casa_ta = new Casa();

echo "<pre>";
var_dump($casa_mea);
var_dump($casa_ta);

// in PHP >=5 obiectele sunt mereu parsate prin referinta
$casa_noua = $casa_mea; // in PHP4 acest lucru era tradus prin $asa_noua = &$casa_mea;

// pentru a obtine doua obiecte diferite  folosim cuvantul cheie clone
$casa_moderna = clone $casa_mea; 

// pentru a avea acces la o proprietate a unui obiect folosim ->
// la fel cu pentru elementele unui array foloseam []
echo $casa_mea->numarFerestre;
$casa_mea->numarFerestre=20;
echo $casa_mea->numarFerestre;
echo $casa_ta->numarFerestre;


// https://www.php.net/manual/ro/function.spl-autoload-register.php
// Incarcarea automata a claselor
//spl_autoload_register ( function ( $class_name ) {
//include $class_name . '.php';
//});



// pentru a avea acces la o proprietate statica folosim  operatorul  ::   NumeClasa::$proprietate
// https://www.php.net/manual/ro/language.oop5.paamayim-nekudotayim.php
echo Casa::$numarEtaje;
//sau 
echo $casa_mea::$numarEtaje;

$casa_mea->schimbCuloare('rosu');
$casa_mea->inchideCasa();
$casa_mea->adaugaEtaj();
var_dump($casa_mea);
echo Casa::$numarEtaje;
echo $casa_mea->reclamaCasa();
echo Casa::GARAJ;
//sau 
echo $casa_mea::GARAJ;
  
