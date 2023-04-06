<?php
echo 'Recapitulare array';
?>
<h2>2. Ce afiseaza urmatorul script?</h2>
<?php
$a = array(1,2,3,4,5,6,7,8,9);
reset($a);
key($a);
//echo next(next(prev(next($a))));
echo key($a);
?>
<h2>3. Ce afiseaza urmatorul script?</h2>
<?php
$a = array(1,2,3,4,5,6,7,8,9);
reset($a);
next($a);
prev($a);
next($a);
echo next($a);
echo key($a);
?>
<h2>4. Ce afiseaza urmatorul script ? </h2>
<?php
$masini = array("Volvo","BMW","Toyota","DACIA","AUDI");
rsort($masini);
print_r($masini);

 ?>
<h2>7. Ce afiseaza urmatorul script?</h2>
<?php

$cumparaturi = ['1'=>"paine",'2'=>"oua",'3'=>"lapte", '4'=>'masline','5'=>'cadouri'];

uasort($cumparaturi, "dupa_lungime");

function dupa_lungime($e1, $e2){
  return strlen($e1)-strlen($e2);
}

//echo "<pre>";
print_r($cumparaturi);
?>

<h2>8. Ce afiseaza urmatorul script?</h2>
<?php
$tabloul=array("oras"=>"Bucuresti", 10, 89);
$tablou2=array("abac","computer","oras"=>"Braila",4);
$rezultat=array_merge($tablou2, $tabloul);
print_r($rezultat);
 ?>

<h2>Max si min intr-un array</h2>
<?php
function getMax($array)  
{ 
   $n = count($array);  
   $max = $array[0]; 
   for ($i = 1; $i < $n; $i++)  
       if ($max < $array[$i]) 
           $max = $array[$i]; 
    return $max;        
} 
  
// Returns maximum in array 
function getMin($array)  
{ 
   $n = count($array);  
   $min = $array[0]; 
   for ($i = 1; $i < $n; $i++)  
       if ($min > $array[$i]) 
           $min = $array[$i]; 
    return $min;        
} 
  
// Driver code 
$array = array(11, 2, 0,3, 14, 5); 
echo(getMax($array)); 
echo "<br>"; 
echo(getMin($array)); 

// Sa se determine mumarul maxim de 3 cifre consecutive dintr-un array
//$arr =[2,3,7,8,1,3,8,0,9];
$arr =[1,8,2,3,9,0,0,6,4,2,7,8,2,5];
//voi genera un nou array cu numere de 3 cifre consecutive
$n =[];
$count = count($arr);
foreach ($arr as $k=>$a){
    // verific sa nu ajung l final cu numere de 2 sau 1 cifra 
    // adica elimin 25 si 5 
    // si numerele care incep cu 0
    if($k+2<$count && $a !=0){
        $n[$k] = $arr[$k].$arr[$k+1].$arr[$k+2];
    }
    
}
print_r($n);

// din acest array returnex maximul
$max = 0;
foreach ($n as $r){
    if ($max <$r){
        $max = $r;
    }
}
echo $max;
?> 