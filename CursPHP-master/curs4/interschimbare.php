<?php

$arr = [5,3,7,8,3,9,1,0,2,4,6,];
// siruri mici
//Bubble sort - sortarea prin interschimbare  se cauta minimul si se muta la inceput
//Stabil : DA //O metoda de sortare este stabila daca ordinea relativa a elementelor
//cu aceea¸si cheie de sortare ramane neschimbata.
// Sortare descrescatoare : a[i] < a[i+1]
// Sortare crescatoare : a [i] > a[i+1]
$lungime = count($arr);
function selectie($arr, $n){
    for($i=0 ; $i<$n-1;$i++){
        for($j=$i+1;$j<$n;$j++){
            if($arr[$i]> $arr[$j]){
                $aux = $arr[$i];
                $arr[$i] = $arr[$j];
                $arr[$j] = $aux;
            }
        }
    }
    return $arr;
}

$arr_sort = selectie($arr,$lungime);
echo "<pre>";
print_r($arr_sort);
