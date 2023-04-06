<?php

interface Design {
    function color($color);
    function rezistenta();
}
interface Masina{
    function start();
    function stop();
    function accelereaza();
}

abstract class Automobil{
    abstract protected function calcKmParcursi();
}


class Dacia extends Automobil implements Masina, Design {

    //trebuie sa implemeteze toate metodele mostenite
    public  function start(){
        return "A pornit la sfert de cheie. Uraaaaaa!";
    }
    public function stop(){
        return "Stop. S-a oprit masina";
    }


    public function accelereaza(){
        echo "accelereaza lent 1 - 100km in 10 secunde";

    }
    function color($color,$cod=445){
        echo "culoarea este ". $color."cod culoare ". $cod;
    }
    function rezistenta(){
        echo "rezistenta la impact este buna: 4 stele";
    }
    protected function calcKmParcursi()
    {
        return $km = $this->capacitateRezervor * 33 . ' de km';
    }
    
}

$logan = new Dacia();
$logan->color('alb');
