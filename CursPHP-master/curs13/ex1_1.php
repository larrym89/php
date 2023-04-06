<?php
// Clsase Abstracte
// Clasele abstracte se declara folosind cuvantul "abstract" inaintea lui "class".
// Daca o clasa contine cel putin o metoda abstracta ea trebuie declarata abstracta
// o clasa abstracta poate sa nu contina metode abstracte

abstract class Persoana {
    public $nume;
    
	public function __construct($nume) {
		$this->nume = $nume;
    }
	abstract public function salut() : string; //metoda abstracta care va returna, la implementare, string
}


class Programator extends Persoana {
	public function salut() : string {
		return "Salut!. Sunt programator si numele meu este " . $this->nume;
	}
}
class Student extends Persoana {
	public function salut() : string {
		return "Salut! Sunt student si numele meu este " . $this->nume;
	}
}
class Profesor extends Persoana {
	public function salut() :string {
		return "Buna ziua!";
	}
}

//$persoana = new Persoana("Goe");//Fatal error: Cannot instantiate abstract class Persoana

$programator = new Programator('Ion');
echo $programator -> salut();
echo "<br>";

$student = new Student('Dan');
echo $student -> salut();
echo "<br>";

$profesor = new Profesor('Tudor');
echo $profesor -> salut();
echo "<br>";