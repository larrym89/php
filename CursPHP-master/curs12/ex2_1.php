<?php
// mostenirea pe mai multe nivele
class Bunic
{
    public $nume = "Popescu, numele este public";
    protected $casa = 'Casa este protejata dar mostenita doar de copii directi si nu de nepoti!';
    private $pensie = 'Doar Bunicul foloseste pensia';

    public function afiseazaNume()
    {
        echo $this->nume;
    }
    protected function afiseazaCasa()
    {
        echo __CLASS__;
        echo $this->casa;echo "<pre>";
    }
    private function afiseazaPensie()
    {
        echo $this->pensie;
    }

}

class Parinte extends Bunic
{
    protected $codulPin;
    public $casa = 'Casa Bunicului am mostenit-o si o fac muzeu devine publica!';

    protected function getCodulPin()
    {
        return $this->codulPin;
    }
    private function setCodulPin($codulPin)
    {
        $this->codulPin = $codulPin;
    }

    public function afiseazaCasa()
    {
        parent::afiseazaCasa();
        echo __CLASS__;
        echo $this->casa;echo "<pre>";
    }
}
class Parinte2 extends Bunic{

}


class Copil extends Parinte
{

    public function call()
    {
        //pot sa decit ce sa accesez
        //echo self::afiseazaCasa(); // self
        //echo parent::afiseazaCasa(); // parinte
        echo Bunic::afiseazaCasa(); // bunic
    }
}
$Gigel = new Copil();
//var_dump($Gigel);
//$Gigel->afiseazaNume();
$Gigel->call();
//Gigel sa acceseze pensia
//Gigel sa schimbe codulPim
//Gigel nu pote savanda direct casa bunicului ci doar cu acordul parintelui
echo $Gigel->casa;

$Ion = new Parinte2();
var_dump($Ion);
