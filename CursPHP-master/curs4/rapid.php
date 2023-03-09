<?php

//siruri mari
//Quicksort
/*
 * Stabil : DA
Sortare descrescatoare : while(vector[min] > mijl) min++;
 while(vector[max] < mijl) max--;
Sortare crescatoare : while(vector[min] < mijl) min++;
 while(vector[max] > mijl) max--;
 *
 */
$arr = [5,3,7,8,3,9,1,0,2,4,6];


function rapid($a){
    $st = $dr = [];
    $lungime = count($a);

    if($lungime<2){
        return $a;
    }
    echo  $pivot_key = key($a);
    echo $pivot = array_shift($a);
    foreach($a as $val)
    {
        if($val <= $pivot)
        {
            $st[] = $val;
        }elseif ($val > $pivot)
        {
            $dr[] = $val;
        }
    }
    return array_merge(rapid($st),array($pivot_key=>$pivot),rapid($dr));



}

$arr_sort = rapid($arr);
echo "<pre>";
print_r($arr_sort);

