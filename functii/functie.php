<?php

function suma3($x=0, $y=0, $z=0) {
    echo $x + $y + $z;
    echo "<br>";

}

// suma3(10, 20);
// suma3(10, 20);
// suma3(10, 20);

function suman(...$z){
    // var_export($z);
    $suma = 0;
    foreach ($z as $s) {
        if (is_numeric($s)) {
            $suma += $s;

        }
    }
    echo $suma;

}

suman(10, 20, 12, 444, '2aaa');

?>
