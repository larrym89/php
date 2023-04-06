<?php
include('autoload.php');

$cal = new Animal();
$cal->setFamilie('Erbivor');
$cal->setMancare('fan');
$cal->mananca(3);

// __get  __set
//$cal->nume='Black Beauty';
echo $cal->nume;
$ponei = clone $cal;

echo "sfarsit";