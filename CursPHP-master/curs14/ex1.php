<?php
// https://goalkicker.com/PHPBook/
//anonymous class
$salut = new class {
    public $dimineata = "Buna dimineata";
    protected $pranz = "Buna ziua";
    private $seara ="Buna seara";
    const NOAPTEA ='somn';

    function __toString()
    {
        $ora = date('H');
        if( $ora >6  && $ora <11){
            return $this->dimineata;
        }
        elseif($ora >=11 and $ora<15){
            return $this->pranz;
        }
        elseif($ora >=15 and $ora<22){
            return $this->seara;
        }
        else{
            return  self::NOAPTEA;
        }
        
    }


};
echo $salut;// se apeleaza automat metoda magica toString()
echo $salut->dimineata;
echo $salut::NOAPTEA;