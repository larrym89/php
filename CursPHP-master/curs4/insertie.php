<?php
$arr = [5,3,7,8,3,9,1,0,2,4,6,];
//Algoritmul de sortare prin insertie (Insertion sort)  se insereaza elementele in pozitia necesara

//Sortare descrescatoare : j > 0 && a[j - 1] < a[j]
//Sortare crescatoare : j > 0 && a[j - 1] > a[j]
$lungime = count($arr);


function insertie($a, $n){
    for ($i=1; $i<$n;$i++){

        $aux =$a[$i];
        $j =$i-1;
        while (($j>=0) && ($aux <$a[$j])){
            $a[$j+1] = $a[$j];
            $j = $j -1;
        }
        $a[$j+1] = $aux;

    }
    return $a;
}

$arr_sort = insertie($arr,$lungime);
echo "<pre>";
print_r($arr_sort);