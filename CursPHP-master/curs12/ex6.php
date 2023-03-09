<?php
//suprascrierea - Overriding  - si apelarea automata a metodelor din clasa parinte cu parent::
/*
suprascrierea metodelor trebuie sa respecte definita din clasa parinte.
(nume si numar de argumente obligatorii, cele fara valori default)
*/
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
	public function sayHello() {
		echo "Buna ziua! Sunt Persoana <br>";
	}
}

class User extends Person {
    // overriden method
    // in acest caz se mai apeleaza constructorul parinte
	public function __construct($name, $age, $school) {
		parent::__construct($name, $age);
		$this -> school = $school;
    }
    public function introduce() {
		echo "Numele meu este {$this -> name}. Si am {$this -> age} ani si studiez la {$this -> school}";
	}
	public function sayHello($ora=4) {
		echo "Buna ziua! Este ora $ora.<br>";
	}
}
$tom = new User('Toma', 19,'Facultate');
$tom -> sayHello(3);//Warning: Declaration of User::sayHello($ora) should be compatible with Person::sayHello()
$tom -> introduce();