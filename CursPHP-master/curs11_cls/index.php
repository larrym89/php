<?php


include_once('Creion.php');

$c1 = new Creion;

$c2 = new Creion();
$c3 = new Creion(200);

echo "<pre>";
// var_dump($c1);
// var_dump($c2);
// var_dump($c3);


echo $c1;
//$c1->culoare333 =55;
//$c1->sterge(1,3,6);

//Creion::coloreaza('rosu','verde');

//     $c1->ascutire();
//     $c2->ascutire();
//     echo "<br>";
//     Creion::$grosimeMina=0.5;
//     $c1->ascutire();
//     $c2->ascutire();
//     echo "<br>";
//  $c1->culoare= 'rosu';
//  //$c1->lungime= 200;
//  //$c1->setLungime('155');
//  echo "<br>";echo "<br>";
//  var_dump($c1);
//  echo $c1->getLungime();
//  echo "<br>";echo "<br>";echo "<br>";
//  var_dump($c1);