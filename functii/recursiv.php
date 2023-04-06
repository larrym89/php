<?php 

function putere(int $x, int $y) {
    if (($x == 0) && ($y > 0))
        return 0;
    if (($x > 0) && ($y == 0))
        return 1;
    if (($x > 0) && ($y > 0))
        return $x * putere($x, $y - 1);
}

echo putere(10, 2);

?>