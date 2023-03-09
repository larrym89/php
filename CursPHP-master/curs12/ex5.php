<?php
//suprascrierea - Overriding


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
    // overriden method
    // in acest caz NU se mai apeleaza constructorul parinte
	public function __construct($name, $age, $school) {
		$this -> name = $name;
		$this -> age = $age;
		$this -> school = $school;
    }
    public function introduce() {
		echo "Numele meu este {$this -> name}. Si am {$this -> age} ani si studiez la {$this -> school}";
	}
	public function sayHello() {
		echo "Buna ziua! <br>";
	}
}
$tom = new User('Toma', 19,'Facultate');
$tom -> sayHello();
$tom -> introduce();