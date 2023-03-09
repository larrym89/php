<?php
class Creion {
    public $marca ;
    public $culoarea;
    public $forma;

    public static $lungime;


    public function scrie(){
        echo "deseneaza cu " .$this->culoarea;
    }
}