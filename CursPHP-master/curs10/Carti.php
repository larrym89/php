<?php

class Carti{
    public $titlu = 'Demo';
    public $autor = 'Mihai';

    public function info (){
        echo " Informatii despre carte in curand!";
    }
}

$carte = new  Carti();
$carte2 = new Carti;

echo "<pre>";
var_dump($carte);
echo "<br>";
var_dump($carte2);