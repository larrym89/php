<?php

function add()
{

    $sum = 0;
    $args = func_get_args();
    $nr = func_num_args();
    $nr = count($args);

    for($i = 1; $i <= $nr; $i++)
    {
        $sum += $args[$i-1];
    }

    return $sum;

}

echo add(5, 7, 8);