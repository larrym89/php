<?php

//cand se foloseste cuvantul cheie rezervat use?

/*
1.Using namespaces: Aliasing/Importing 
https://www.php.net/manual/en/language.namespaces.importing.php
2. To add a trait to a class 
https://www.php.net/manual/en/language.oop5.traits.php
3. In anonymous function /method definition to pass variables inside the function
https://www.php.net/manual/en/functions.anonymous.php
*/

$message = 'hello';

// No "use" Notice: Undefined variable: 
$example = function () {
    var_dump($message);
};
$example();

// Inherit $message
$example = function () use ($message) {
    var_dump($message);
};
$example();

// Inherited variable's value is from when the function
// is defined, not when called
$message = 'world';
$example();

// Reset message
$message = 'hello';

// Inherit by-reference
$example = function () use (&$message) {
    var_dump($message);
};
$example();

// The changed value in the parent scope
// is reflected inside the function call
$message = 'world';
$example();

// Closures can also accept regular arguments
$example = function ($arg) use ($message) {
    var_dump($arg . ' ' . $message);
};
$example("Salut");