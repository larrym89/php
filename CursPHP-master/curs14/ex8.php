<?php
//includem toate clasele de care avem nevoie
//Use Composer to autoload your PHP Classes.
require_once 'autoload.php';

 //metoda 1 - global

// $app = new \MyProject\OOP\MyApp();
// $app->test();

 //metoda 2
//  $app = new MyProject\OOP\MyApp();
//  $app->test();


//metoda 3 - recomandata
//  //incarc namespace - ul dorit
//  use MyProject\OOP\MyApp;

//  $app = new MyApp();
//  $app->test();


// folosim trei clase metode cu acelasi nume

use MyProject\OOP\MyApp as MyDemo;
use MyProject\Test\MyApp;

// try{
    $app = new MyDemo();
// }
// catch (Exception $e) {
//     echo $e->getMessage(). $e->getCode();die;
// }

$app->test();
echo "<br>";
$test = new MyApp();
$test->test();

echo "<br>";
$extern = new \MyProject\MyApp();
$extern->test();