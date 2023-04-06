<?php

interface Design {
    function color($color);
    function rezistenta();
}
interface Masina extends Design{
    //O intrefata poate sa extinda una sau mai multe interfete
    function start();
    function stop();
    function accelereaza();
}

abstract class Automobil{
    abstract protected function calcKmParcursi();
}


class Dacia extends Automobil implements Masina {

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
    function color($color){
        echo "culoarea este ". $color;
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
