<?php
spl_autoload_register(function ($class) {
    $prefix = 'MyProjectaaaa';
    $len = strlen($prefix);
    $relative_class = substr(str_replace('\\','/',$class), $len);
    require 'classes'  . $relative_class. '.php';
    //throw new Exception("Nu pot incarca $class.", 10000);
});