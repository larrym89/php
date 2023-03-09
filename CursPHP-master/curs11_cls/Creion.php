<?php
class Creion{
    public $culoare;
    private $lungime;
    public $forma;
    public static $grosimeMina=0.7;
    public const FREZA = 5;

    public function __construct($l='300'){
        $this->lungime = $l;
    }
    public function __destruct(){
        echo "obiectul s-a sters din memorie";
    }
    // public function __get($property) {
    //     if (property_exists($this, $property)) {
    //         return $this->$property;
    //     }
    //     else{
    //         return "Mai incearca!";
    //     }
    // }
  public function __set($property, $value) {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }
    }
    public function scrie(){
        echo " a inceput sa scrie ";
    }
    public function ascutire(){
        echo " creionul nu mai are varf";
        $this->lungime = $this->getLungime() - self::FREZA;
        echo " Acum creionul este ascutit si scrie iar cu ". self::$grosimeMina;
    } 
    public function getLungime()
    {
        if(isset($this->lungime)){
            return $this->lungime;
        }
        else{
            $this->setLungime('200');
            return $this->lungime;
        }
    }

    public function __call($nume, $args){
        echo "s-a apelat metoda" . $nume;
    }
    public  static function __callStatic($nume, $args){
        echo "s-a apelat metoda statica" . $nume;
    }

    public function __toString(){
        return "Creionul meu are culoarea ". $this->culoare;
    }

    /**
     * Set the value of lungime
     *
     * @return  self
     */ 
    public function setLungime($lungime)
    {
        if($lungime <='200' && $lungime >= '150'){
            $this->lungime = $lungime;
        }
        else{
            $this->ascutire();
        }
        

    }
}