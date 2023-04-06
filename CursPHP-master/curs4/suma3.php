<?php

function suma3($x,$y,$z){

    echo $x+$y+$z,"\n";
}
// suma3(4,5,6);
// suma3(14,15,16);
// suma3(24,25,26);

function suma4(...$z){
    $suma =0;
    foreach($z as $s){
        $suma += $s; 
    }
    echo $suma;

}

//suma4(1,2,3,-3);

function modifica($a,$b=3){
    echo $b = $b+$a +15;
}
// $a = 0;
// modifica($a);
// modifica(null,3);
// echo $a, $a;


function modifica2(&$n =3){
$n = $n +15;
}
// $a = 0;
// modifica2($a);
// echo $a;


function myStaticTest() {
    static $a = 0;  // static 
    echo $a ;
    $a++;
}
myStaticTest();
myStaticTest();
myStaticTest();