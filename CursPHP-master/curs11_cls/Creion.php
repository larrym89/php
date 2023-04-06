<?php

class Creion {

    public $culoare;
    protected $lungime;
    public $forma;
    public static  $grosimeMina=0.7;
    const FREZA = 5;

    public function scrie() {
        echo "Creionul a inceput sa scrie";
    }

    public function ascutire() {
        echo "Creionul nu mai are varf";
        $this->lungime = $this->lungime - self::FREZA;
        echo "Acum creionul este ascutit si scrie iar cu " . self::$grosimeMina;
    }

    


    /**
     * Get the value of lungime
     */
    public function getLungime()
    {
        if(isset($this->lungime)){
            return $this->lungime;
        }
        else{
            $this->setLungime(200);
            return $this->lungime;
        }
    }

    /**
     * Set the value of lungime
     */
    public function setLungime($lungime)
    {
        $this->lungime = $lungime;

    }
}