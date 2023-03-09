<?php
//https://phpenthusiast.com/object-oriented-php-tutorials/practice

//clasele abstracte pot avea metode  non abstracte
abstract class Masina
{

    protected $capacitateRezervor;

    public function setCapacitateRezervor($volum)
    {
        $this->capacitateRezervor = $volum;
    }

    // Metodele abstracte pot fi : public sau protected
    abstract public function calcKmParcursi();
}

class Mercedes extends Masina
{
    // trebuie sa implementam metoda abstracta cu acelasi modificator de acces sau unul mai permisiv
    protected function calcKmParcursi()
    {
        return $km = $this->capacitateRezervor * 33 . ' de km';
    }

    public function getColor()
    {
        return " Culoarea este neagra";
    }
}
// daca nu este mostenita metoda abstracta 
class Honda extends Masina
{
    public function calcKmParcursi()
    {
        $km = $this->capacitateRezervor * 30 . ' de km';;
        return $km;
    }
}
class Toyota extends Masina
{
    //daca declaram o metoda abstracta care este implementata{ are cod }
   abstract public function calcKmParcursi()
    {
        return $km = $this->capacitateRezervor * 20 . ' de km';
    }

    public function getColor()
    {
        return " Culoarea este alba";
    }
}
//daca este mostenita dar nu este implementata metoda abstracta 
class Dacia extends Masina
{
   // public function calcKmParcursi();
   public function calcKmParcursi(){}
}

$toyota1 = new Toyota();
$toyota1 -> setCapacitateRezervor(45);
echo $toyota1 -> calcKmParcursi();
echo $toyota1 -> getColor();