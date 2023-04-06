<?php

// interfata este o lista de metode abstracte

interface Persoana {
    // practic nu este constructor, dar oblica clasele ce implementeaza
    // sa defineasca un constructor
    const ZILELCRATOARE = 5;  // nu poate fi decat public, de regula nu se mai scrie public
    
    public function __construct($name); // nu poate fi decat public, de regula nu se mai scrie public
	function salut() : string;  // nu poate fi decat public, de regula nu se mai scrie public
}

class Programator implements Persoana {
    public $name;
    //constructorul implementat
	public function __construct($name) {
		$this -> name = $name;
	}
	public function salut() : string {
		return "Salut!. Sunt programator. Zile lucratoare pe saptamana ".self::ZILELCRATOARE;
    }
}
$programmer = new Programator('Ion');
echo $programmer -> salut();
echo $programmer::ZILELCRATOARE;
echo Programator::ZILELCRATOARE;
echo Persoana::ZILELCRATOARE;