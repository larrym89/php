<?php

$levels = 10;

for($i=0; $i<$levels; $i++) {
    for ($j = 0; $j < floor(($levels - $i)); $j++) {
        echo "&nbsp;&nbsp";
    }
    for($j=0; $j<(2*$i)-1; $j++) {
        echo "*";
    }
        echo "<br />";

}

?>