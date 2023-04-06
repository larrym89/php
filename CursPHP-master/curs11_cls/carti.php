<?php
include_once('autoload.php');


$demo = new Demo();
$carte = new Carte('Poezii', 'George Cosbuc');
$carte3 = new Carte('Roman', 'Mihai Sadoveanu');

echo $carte;

$carte2 = clone $carte;
echo $carte2;