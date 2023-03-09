<?php

class Carti{
    public $titlu = 'Demo';
    public $autor = 'Mihai';
    public $editura;
    public $anAparitie;
    public $nrPagini;
    public $pret;
    public static $format= 'A4';



    
    public function info ($an){
        echo 'Aceasta carte se numeste '.$this->titlu;
    }

    public function stopCitit(){
        echo "nu mai citesc.";
        $this->info($this->anAparitie); 

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
        if(isset($autor) && strlen($autor)>=5)
        $this->autor = $autor;

       
    }

    /**
     * Get the value of nrPagini
     */ 
    public function getNrPagini()
    {
        return $this->nrPagini;
    }

    /**
     * Set the value of nrPagini
     *
     * @return  self
     */ 
    public function setNrPagini($nrPagini)
    {
        $this->nrPagini = $nrPagini;

        return $this;
    }
}

