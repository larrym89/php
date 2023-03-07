<?php

// $arr = [
//     'ar1' => array(1, 2, 3, 4),
//     'ar2' => array(5, 6, 7, 8, 9),
//     'ar3' => array(10, 11, 12, 13, 14, 15),
//     16, 17, 18, 19
// ];

// if (isset($arr) && !empty($arr)) {
//     foreach ($arr as $a) {
//         if (is_array($a)) {
//             foreach ($a as $nr) {
//                 echo $nr . ' ';
//             }
//         } else {
//             echo $a . ' ';
//         }
//     }
// }

$cumparaturi = [
    '1'=>'paine',
    '2'=>'oua',
    '3'=>'lapte',
    '4'=>'masline',
    '5'=>'cadouri'
];

function dupa_lungime($e1, $e2) {
    return strlen($e1) - strlen($e2);
}

uasort($cumparaturi, "dupa_lungime");
echo "<pre>";
print_r($cumparaturi);
