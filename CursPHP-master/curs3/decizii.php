<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2>
    1. Sa se verifice daca un numar generat cu functia rand(1,30) este par sau impar.
</h2>
    <?php
        $x  = rand(1,30);
        if ($x % 2 == 0){
            echo "Numarul $x este par.";
        }
        else{
            echo "Numarul $x este impar.";
        }
     ?>

<h2>2. Scrieti un algoritm care sa determine maximul dintre doua numere.</h2>
<?php
$x = 4;
$y = 15;
if($x >= $y){
    echo "Numarul $x este mai mare decat $y.";
}
else{
    echo "Numarul $y este mai mare decat $x.";
}
 ?>
<h2>3. Scrieti un algorim care sa determine minimul dintre 3 numere.</h2>
<?php
$x = 9;
$y =4;
$z = 7;
if($x <= $y){
    if($x <= $z){
        echo "Numarul minim este $x.";
    }
}
elseif($y <= $z){
        echo "Numarul minim este $y.";
}
elseif($z <= $x){
        echo "Numarul minim este $z.";
}
?>
<p>
Metoda 2.
</p>
<?php
if($x <= $y && $x <= $z){
    echo "Numarul minim este $x.";
}
elseif($y <= $z && $y <=$x){
        echo "Numarul minim este $y.";
}
else{
        echo "Numarul minim este $z.";
}
?>
<h2>
    4. Intr-un parc se joaca 3 copii care au greutatile a,b,c. Sa se stabileasca
     daca se pot aseza pe un balansoar astfel incat acesta sa stea in echilibru.
</h2>
<?php
$x = rand (15, 35);//greutatea primului copil
$y = rand (15, 35);//greutatea celui de al doilea copil
$z = rand (15, 35);//greutatea celui de al treilea copil

if(($x + $y == $z) || ($y + $z == $x) || ($z + $x == $y)){
    echo 'Copiii au greutatile '.$x.' '.$y.' '.$z.' si se pot aseza in balansoar in echilibru, doi intr-o parte si unul intr-o parte!';
}
elseif( $x == $y || $y == $z ||  $z == $x ){
    echo 'Copiii au greutatile '.$x.' '.$y.' '.$z.' si se pot aseza in balansoar in echilibru, unul intr-o parte si unul intr-o parte!';
}
else{
    echo 'Copiii au greutatile '.$x.' '.$y.' '.$z.' si nu se pot aseza in balansoar in echilibru!';
}
 ?>
<h2>5. Se citesc varsta ($v), inaltimea($i)si sexul($s) unei persoane.
    Sa se calculeze greutatea($g) ideala, dupa formula :
$g =50+0.75*($i-150)+($v-20)/4, pentru baieti
$g = $g *0.9, pentru fete
</h2>
<?php
$v = rand(18 ,55);
$i = rand (150, 200);//generez inaltimi in cm
$s = rand (1,2) ;// 1 masculin ; 2 feminin
$g =50+0.75*($i-150)+($v-20)/4;
if ($s == 1){
    echo "Pentru baieti, de inalime $i, varsta $v, greutatea ideala este $g";
}
else{

    $g = $g *0.9;
    echo "Pentru fete, de inalime $i, varsta $v, greutatea ideala este $g";
}
?>
<h2>6. Sa se verifice daca un numar generat cu functia rand(1,10) este par sau impar.</h2>
<?php
$nr = rand (1,10);
switch ($nr) {
    case 2:
    case 4:
    case 6:
    case 8:
    case 10:
        echo 'numarul '.$nr.' este par';
        break;
    default:
        echo "numarul $nr este impar";
        break;
}
?>
<h2>7. Programul ce afiseaza un calificativ in functie de nota unui student. Nota va fi setata in variabila $nota. 1-4 insuficient;5-6 suficient;
7 – 8 bun; 9-10 burisier;
</h2>
<?php
$nota = rand (1,10);
switch ($nota) {
    case 1:
    case 2:
    case 3:
    case 4:
        echo 'Cu nota '.$nota.' studentul va fi repetent';
        break;
    case 5:
    case 6:
        echo 'Cu nota '.$nota.' studentul va fi slab';
        break;
    case 7:
    case 8:
        echo 'Cu nota '.$nota.' studentul va fi bun';
        break;
    default:
        echo 'Cu nota '.$nota.' studentul va fi bursier';
        break;
}
?>
<h2>8. Scrieti un program care va afisa "Azi este $zi", unde $zi va fi ziua din saptamana.</h2>
<?php
$i= rand(1,7);
//$i = date('w'); // ziua din saptamana
$zi = array(); //  Array
$zi['1'] = 'Luni';
$zi['2'] = 'Marti';
$zi['3'] = 'Miercuri';
$zi['4'] = 'Joi';
$zi['5'] = 'Vineri';
$zi['6'] = 'Sambata';
$zi['7'] = 'Duminica';
switch ($i) {
    case 1:
        echo "Azi este $zi[$i]";
        break;
    case 2:
        echo "Azi este $zi[$i]";
        break;
    case 3:
        echo "Azi este $zi[$i]";
        break;
    case 4:
        echo "Azi este $zi[$i]";
        break;
    case 5  :
        echo "Azi este $zi[$i]";
        break;
    case 6:
        echo "Azi este $zi[$i]";
        break;
    default:
        echo "Azi este $zi[$i]";
        break;
}
 ?>
<h2>9. Numar par sau impar. Maxim</h2>
<?php
$nr = 5;
echo ($nr % 2 == 0)?  "par": "impar";
$a = 6;
echo "<br />";
$b = 8;
echo ($a >$b)?  "maxim $a": "maxim $b";

?>
<h2>10. Se determine daca un utilizator este logat pe site.</h2>
<?php
$user = null ?? 'vizitator';
var_dump($user);
 ?>
 <h2>11. Folosind cele 3 structure repetitive: while, do while, for, sa se afiseze primele 15 numere.</h2>
 <?php
 $i = 0;
 while ($i <= 15) {
     echo $i;
     echo "<br  />";
     $i++;
 }

 $j=0;
 do {
     echo $j;
     echo "<br  />";
     $j++;
 } while ($j<= 15);

 for($k=0;$k<=15; $k++){
     echo $k;
     echo "<br  />";
 }

  ?>
 <h2>
     12. Folosint continue si o structura repetitive sa se afiseze doar
     numerele impare pana la 15.
</h2>
<?php
for($i=0;$i<=15;$i++){
    if($i % 2 == 0){
        continue;
    }
    echo $i.', ';
}
?>
 <h2>13.Sa se progrmaeze un senzor care determina cantitatea de carburant aflata in rezervor.
 Daca candtitatea de combustibil scade sub 10 litri sa afiseze un mesaj de avertizare cu portocaliu: "Va rog sa alimentati!“.
 Daca cantitatea de combustibil este< 1 sa afise cu rosu mesajul:"Ati ramas fara combustibil. Trebuie sa ne oprim!“
</h2>
<?php
 $combustibil = 55;
 $viteza = rand (60, 80);
 while ($combustibil >=0){
    if($viteza >=60):?>
       <p style='color:red'>Ati depasit viteza legala 50km/h!</p>
       
    <?php  endif;?>
    <?php if ($combustibil >=10 && $combustibil % 5 ==1):?>
        <p>Mergi prudent! Vata are prioritate</p>
    <?php elseif($combustibil >=2 && $combustibil <10):?>
        <p style='color:orange'>Va rog sa alimentati!</p>
    <?php elseif($combustibil <=1):?>
        <p style='color:red'>Trebuie sa ne oprim!</p>
        <audio autoplay><source src='audio/beep.mp3' type='audio/mpeg'></audio>
        <iframe src="audio/beep.mp3" allow="autoplay" style="display:none" id="iframeAudio"></iframe> 
    <?php die; endif;?>
<?php  
    $combustibil = $combustibil-2;

 }
?>
 <h2>14. Sa se sorteze crescator un sir de numere</h2>
 <?php
    $arr = array(12,4,11,5,10,2,13,8,6,15,0,3,7,1,9,14);
    print_r($arr);
    for($i=0;$i<=15;$i++){
        $aux = $arr[$i];
        $j = $i-1;
        while($j>=0 && $arr[$j]>$aux ){
            $arr[$j+1] = $arr[$j];
            $j = $j-1;
            
        }
        $arr[$j+1] = $aux;
    }
    
    print_r($arr);

 ?>
 15.
Sa se interschimbe continutul a doua variabile.
Date de intrare
a= 5  b= 7
Date de iesire
a= 7 b = 5
16.
Dorel doreste sa cumpere 2 produse online. Insa fiecare dintre cele doua
produse sunt in doua variante de pret( 2 magazine diferite). Cunoscandu-se cele 2 preturi pentru fiecare produs,
sa se afiseze cat ar economisi Ionel daca ar cumpara produsele cele mai ieftine.
Date de intrare
x1= 34 x2 =38
y1= 57 y2 =60
date de iesire
7
 17.
100 sportivi, cu numere de concurs consecutive de la 1 la 100, participa la un concurs de inot. Distribuiti automat cate 6 sportivi,  in echipe, astfel incat sa aprticipe pe rand la proba de inot.
 Echipa incompleta va inota ultima.
 Ex:
 Date de intrare primele 100 de numere
 date de iesire:
 1,7,13,19,25,31 - Primul start
 2,8,14,20,26,32 - Al -2-lea start
 
 18.
 Calculator: să se calculeze: suma, diferenţa, câtul, produsul, etc.  pentru două numere reale.
 Se preiau datele din URL cu ajutorul $_GET si se face operatia dorita.
 Exemplu URL : http://localhost/cursphp/calculator.php?a=10&op='+'&b=25
 Date de intrare:
 a=10 ; op='+'; b =25
 Date de iesire:
 10+25 =35
 
19.
Un client al unei bănci câștigă în fiecare an 11% dobândă din sold. Să se afișeze soldul pe
fiecare an, daca lasa banii la banca 8 ani.
El depunde initial 2500 RON. Din al doilea an soldul este egal cu suma depusă + dobânda.
Date de intrare: sold: 2500 , dobanda: 11, nrAni:8
Date de iesire: suma in lei

20.
Se consideră o succesiune de caractere de '1' şi '0' din care primul caracter
este '1'. Această secvenţă este reprezentarea în baza 2 a unui număr
natural. Să se afişeze acest numărul în baza 10.
Date de intrare:
1111
11111
Date de iesire
15
31

21.
Ce va afisa urmatorul script?
<?php
if (true == 1){
    echo "Adevarul este relativ!";
}
if (0 == 'true'){
    echo "Minciuna are picioare scurte!";
}
?>
22. Ce va afisa urmatorul script?
<?php
$n = 1; //dar daca $n ='abc';
switch ($n) {
    case 0:
        echo "numarul este 0 ";
    case 1:
        echo "numarul este 1 ";
    case 2:
        echo "numarul este 2 ";
    }
?>
23. Ce va afisa urmatorul script?
<?php
$index = 1;
for (;;) {
    if($index > 10) {
        break;
 }
 echo "$index \n";
 $index++;
}
?>
</body>
</html>
