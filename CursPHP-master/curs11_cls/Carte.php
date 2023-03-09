<?php
class Carte{

    private $titlu;
    private $autor;

    public function __construct($t, $a){
        echo "se executa constructorul <br>";
        if(isset($t) && strlen($t)>=3){
            $this->titlu= $t;
        }
        else{
            $this->titlu= $this->setTitlu('Titlu carte');
        }
        if(isset($a) && str_word_count($a, 0) >=2){
            $this->autor = $a;
        }
        else{
            $this->autor = $this->setAutor('Autor');
        }

    }
    public function __clone(){
        echo " se executa codul din clone<br>";
    }
    public function __toString(){
        return "Cartea are titlul ". $this->titlu. " si autorul ". $this->autor;
       }

    /**
     * Get the value of titlu
     */ 
    public function getTitlu()
    {
        return $this->titlu;
    }

    /**
     * Set the value of titlu
     *
     * @return  self
     */ 
    public function setTitlu($titlu)
    {
        $this->titlu = $titlu;

        return $this;
    }

    /**
     * Get the value of autor
     */ 
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * Set the value of autor
     *
     * @return  self
     */ 
    public function setAutor($autor)
    {
        $this->autor = $autor;

        return $this;
    }
}