<?php
// local
// global
// static


// 1 local
function myFunction() {
    $b = 7; //Local scop
    echo "Valoarea lui b este $b";
}
myFunction();

// 2 global folosit gresit
$x = 5; // global scop  accesibila in afara functiei
function myTest() {
    echo "Valoarea lui x este $x";
} 
myTest();


// 3 
$y = 5; // global scop
function myTestCorect() {
    global $y;  //acesam variabila globala cu "global"
    
    $b = 7; // local scop
    echo "Valoarea lui x este: $y";
  
    echo "<br />";
    echo "Valoarea lui b este: $b";
} 
myTestCorect();

// 4  static pastraza in memorie valoarea variabile
//In mod normal, cand o functie este executata, la finalul executiei toate variabilele sale sunt sterse.
// STATIC  blocheaza distrugerea variabilelei.
function myStaticTest() {
    static $a = 0;  // static 
    echo $a ;
    $a++;
}

myStaticTest();
myStaticTest();
myStaticTest();
