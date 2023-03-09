<?php
//polimorfism
/*
Conform principiului Polimorfismului, metodele din clase diferite care fac lucruri
 similare ar trebui sa aiba acelasi nume.
*/
interface FiguraGeometrica
{
    public function calcAria();
}
class Cerc implements FiguraGeometrica
{
    private $raza;

    public function __construct($raza)
    {
        $this->raza = $raza;
    }

    // aria cercului
    public function calcAria()
    {
        //return $this -> raza * $this -> raza * pi();
        //return ($this -> raza ** 2) * pi();
        return pow($this->raza, 2) * pi();

    }
}

class Patrat implements FiguraGeometrica
{
    protected $latime;

    public function __construct($latime)
    {
        $this->latime = $latime;
    }
    // aria patratului
    public function calcAria()
    {
        //return $this -> latura * $this -> latura;
        //return ($this -> latura ** 2) ;
        return pow($this->latime, 2);
    }
}
class Dreptunghi extends Patrat
{
    private $lumgime;
   

    public function __construct($latime, $lumgime)
    {
        parent::__construct($latime);
        $this->lumgime = $lumgime;
    }

    // aria dreptunghiului
    public function calcAria()
    {
        return $this->latime * $this->lumgime;
    }
}

$cerc = new Cerc(3);
$patrat = new Patrat(4);
$dreptunghi = new Dreptunghi(3, 4);
echo $cerc->calcAria();
echo "<br>";
echo $patrat->calcAria();
echo "<br>";
echo $dreptunghi->calcAria();
