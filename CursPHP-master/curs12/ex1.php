<?php

/* Clasa User mosteneste proprietatile si metodele ( doar public si protected) clasei Person */
class Person {
	public $name;
	public $age;
	public function __construct($name, $age) {
		$this -> name = $name;
		$this -> age = $age;
	}
	public function introduce() {
		echo "Numele meu este {$this -> name}. Si am {$this -> age} ani";
	}
}

class User extends Person {
    /* __construct() este mostenit si se apeleaza automat atat timp
    cat in clasa copil nu este definit */
	# introduce() este mostenita
	public function sayHello() {
		echo "Buna ziua! <br>";
	}
}
$tom = new User('Toma', 19);
$tom -> sayHello();
$tom -> introduce();