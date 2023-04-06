<?php
include_once ( 'Car.php');
include_once ('Carti.php');

$masina = new Car();
$masina2 = new Car();

$masina->model ='Logan';
//echo Car::$wheels;
$masina::$wheels=35;
// echo $masina2::$wheels;



echo "<pre>";
// var_dump($masina);
// var_dump($masina2);


$carte = new  Carti();
$carte2 = new Carti;

$carte->titlu ='Poezii';
$carte->autor ='Mihai Eminescu';
$carte->setAutor ('George Cosbuc');
$carte->editura='Polirom';
$carte->anAparitie=2007;
$carte->nrPagini =134 ;
$carte->pret = 20;
$carte->info(2021);

$carte2->titlu ='Marile sperante';
$carte2->autor ='Charles Dickens';
$carte2->editura='Univers';
$carte2->anAparitie=2003;
$carte2->nrPagini = 254;
$carte2->pret = 35;


$carte3 = clone $carte2;
$carte3->titlu='titlul de la carte 3';
$carte2->info(2021);
$carte3->info(2021);
echo "<pre>";
var_dump($carte);
echo "<br>";
var_dump($carte2);
echo "<br>";
var_dump($carte3);


$carte2->stopCitit();
$carte3->stopCitit();

