<?php
// http://localhost/cursPHP/curs1/calculator.php?x=3&y=6
var_dump($_GET);
$x = $_GET['x'];
$y = $_GET['y'];

$rez = $x + $y;
echo "Rezultatul este $rez";