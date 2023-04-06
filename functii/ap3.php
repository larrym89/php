<?php

$a = 10;
$func = function () use ($a) {
    echo $a;
};

$func();
$a = 45;
$func();


?>