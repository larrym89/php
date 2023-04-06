<?php

// phpinfo();

// 1
// $salut = "Hello world!";
// echo $salut;
// echo PHP_EOL; // "/n"

// 2
// $a = 10;
// $A = 20;
// echo $a;
// echo PHP_EOL;
// echo $A;

// 3
// $name = "Adrian";
// $$name = "Salut";
// print $Adrian;
// echo PHP_EOL;

// 4
// echo gettype($Adrian);
// echo PHP_EOL;

// 5
// $x = 'abc';
// $y = &$x;
// echo $y; // abc
// echo PHP_EOL;
// $y = 'def';
// echo $x; // ???????

// 6
// $z='script';
// var_dump(isset($z));
// unset($z);
// var_dump(isset($z));

// 7
// var_export($_COOKIE);
// var_dump($_REQUEST);
// echo '<pre>';
// print_r($_SERVER);
// echo '<pre>';

// session_start();
// var_dump($_SESSION);

//var_dump($GLOBALS);

// $_GET  $_POST  

// 8 
// $data = new DateTime();
// var_dump($data);

// 9
// stdClass is PHP's generic empty class, kind of like Object in Java or object in Python
// $o = new StdClass();
// $o->x = 'x este o proprietate a lui o';
// var_dump($o);

// 10
// $fructe = array("mar", "para", "kiwi");
// var_export($fructe);
// var_dump($fructe);
// print_r($fructe);
// echo $fructe;
// print($fructe);

//11 
// $car[0][0] = "GM";
// $car[0][1] = "Cobalt";
// $car[0][2] = "Onix";
// $car[0][3] = "Camaro";

// $car[1][0] = "Ford";
// $car[1][] = "Fiesta";
// $car[1][] = "Fusion";
// $car[1][] = "Eco Sport";
// var_export($car);
// echo $car[1][2];

// 12
// $studenti = array(
//    'Ion' => array(
//         'varsta' => 19,
//         'sex' => 'masculin',
//         'an' => 'II'
//     ),
//     'Ana' => array(
//         'varsta' => 20,
//         'sex' => 'feminin',
//         'an' => 'III'
//     ),
//     'Dan' => array(
//         'varsta' => 19,
//         'sex' => 'masculin',
//         'an' => 'I'
//     ),
// );
// $student = array_key_last($studenti); //array_key_first($studenti)
// echo 'Studentul ' .$student. ' este in anul '.$studenti[$student]['an']. ' si are varsata de '.$studenti[$student]['varsta'].' ani'; 

//$keys = array_keys($studenti);
//$second = $keys[1]; //Ana