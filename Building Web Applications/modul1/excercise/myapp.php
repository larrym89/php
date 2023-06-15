<?php

function my_autoload_function($c){
    require_once "classes/{$c}.php";
}
spl_autoload_register('my_autoload_function');

$myclass = new MyClass();
$myclass->hello();