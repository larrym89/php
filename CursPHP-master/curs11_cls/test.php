<?php
include_once ('Demo.php');

$obj = new Demo();
$obj2 = new Demo();
$obj3 = $obj2;

$obj4 = clone $obj2;


var_dump($obj);