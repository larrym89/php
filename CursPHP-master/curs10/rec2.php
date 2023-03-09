<?php
declare (strict_types = 1);
// https://www.w3resource.com/php-exercises/searching-and-sorting-algorithm/searching-and-sorting-algorithm-exercise-1.php
//Scrieti un program care sorteaza o lista de numere
// Date de intrare Ex. : [3,0,2,5,-1,4,1]
// Date de iesire : [-1,0,1,2,3,4,5]
$my_array = [3, 0, 2, 5, -1, 4, 1];
// Metoda 1 detaliata

// ia ultimul element ca pivot si il pozitioneaza in pozitia corecta in array
// si muta elementele mai mici decat pivotul la stanga si cele mai mari la dreapta

function partition(&$arr,$leftIndex,$rightIndex)
{
    $pivot=$arr[($leftIndex+$rightIndex)/2];
     
    while ($leftIndex <= $rightIndex) 
    {        
        while ($arr[$leftIndex] < $pivot)             
                $leftIndex++;
        while ($arr[$rightIndex] > $pivot)
                $rightIndex--;
        if ($leftIndex <= $rightIndex) {  
                $tmp = $arr[$leftIndex];
                $arr[$leftIndex] = $arr[$rightIndex];
                $arr[$rightIndex] = $tmp;
                $leftIndex++;
                $rightIndex--;
        }
    }
    echo implode(",",$arr)." @pivot este  $pivot<br>";
    return $leftIndex;
}
 
function quickSort(&$arr, $leftIndex, $rightIndex)
{
    $index = partition($arr,$leftIndex,$rightIndex);
    if ($leftIndex < $index - 1)
        quickSort($arr, $leftIndex, $index - 1);
    if ($index < $rightIndex)
        quickSort($arr, $index, $rightIndex);
}

echo implode(",",$my_array)." @ elementele initiale nesortate<br>";
quickSort($my_array,0,count($my_array)-1);
echo implode(",",$my_array)." @elementele sortate<br>";

//Metoda 2 mai compactata
// function quick_sort($my_array)
//  {
//     $loe = $gt = array();
//     if(count($my_array) < 2)
//     {
//         return $my_array;
//     }
//     $pivot_key = key($my_array);
//     $pivot = array_shift($my_array);
//     foreach($my_array as $val)
//     {
//         if($val <= $pivot)
//         {
//             $loe[] = $val;
//         }elseif ($val > $pivot)
//         {
//             $gt[] = $val;
//         }
//     }
//     return array_merge(quick_sort($loe),array($pivot_key=>$pivot),quick_sort($gt));
// }
