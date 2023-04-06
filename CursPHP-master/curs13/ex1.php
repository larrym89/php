<?php

abstract class Persoana1 {
    
	  abstract public function salut() : string; //metoda abstracta care va returna, la implementare, string
    abstract protected function limbaj();
    // abstract private function salariul(); //Fatal error: Abstract function Persoana::salariul() cannot be declared private
}

//  Fatal error: Class Elev contains 1 abstract method and must therefore be declared abstract or implement the remaining methods
class Elev extends Persoana1{
    public function salut() : string {
		return "Salut!. Sunt elev.";
    }
} 

abstract class Student extends Persoana1{
    public function salut() : string {
		return "Salut!. Sunt student.";
    }
} 

class Programator extends Persoana1 {
	public function salut() : string {
		return "Salut!. Sunt programator.";
    }

    public function limbaj(){
        return "Limbajul de programare folosit este PHP.";
    }
    
}

//clasele 
$student = new Student;
echo $strudent->salut();

$prog = new Programator();
echo $prog->salut();
echo $prog->limbaj();