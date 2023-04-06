<?php

// $a = [2, 4, 6, 7];

// var_export($a);

$scores = [5, 10];
$padded = array_pad($scores, 5, 0); // $padded is now array(5, 10 , 0 , 0 , 0)
echo "<pre>";
var_export($padded);

?>