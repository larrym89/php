<?php
declare(strict_types=1);
// Scrieti un program care sorteaza o lista de numere
// Date de intrare [3, 0 ,2 , 5, -1, 4 1]
// Date de iesire [-1, 0 , 1, 2 ,3 ,4, 5]
$my_array = [3, 0 , 2, 5, -1, 4, 1];
// Metoda 1

// ia ultimul element ca pivot si il pozitionezi in pozitia corecta in array
// si muta elementele mai mici decat pivotul la stanga si cele mai mari la dreapta
//Quick sort
function partition($arr, $leftIndex, $rightIndex){

    $pivot = $arr[($leftIndex + $rightIndex)/2];

    while($leftIndex <= $rightIndex) {
        while ($arr[$leftIndex] < $pivot)
            $leftIndex++;
        while ($arr[$rightIndex] > $pivot)
            $rightIndex--;
        if ($leftIndex <= $rightIndex) {
            $tmp = $arr[$leftIndex];
            $arr[$leftIndex] = $arr[$rightIndex];
            $arr[$rightIndex]= $tmp;
            $leftIndex++;
            $rightIndex--;
        }
    }
    echo implode(",", $arr) . "@pivot este $pivot<br>";
    return $leftIndex;

}