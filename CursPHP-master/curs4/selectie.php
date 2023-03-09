<?php

/*Selection Sort
 * Stabil : DA
Sortare descrescatoare : min < a[j]
Sortare crescatoare : min > a[j]
Descriere :
 Acest algoritm selecteaza la fiecare pas, cel mai mic element din vectorul de la pasul
 */
$arr = [5,3,7,8,3,9,1,0,2,4,6,];
$lungime = count($arr);

function select($a, $n){
    for ($i=0;$i<$n-1;$i++){
        $min = $a[$i];
        $poz =$i;
        for ($j =$i+1; $j<$n;$j++){
            if($min>$a[$j]){
                $min = $a[$j];
                $poz = $j;
            }
        }
        $aux= $a[$i];
        $a[$i]  = $a[$poz];
        $a[$poz] = $aux;

    }
    return $a;

}
$arr_sort = select($arr,$lungime);
echo "<pre>";
print_r($arr_sort);
