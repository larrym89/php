<?php

class Animal{
  // in  PHP >= 7.4 private string $familie;
  private $familie;
  protected $mancare;
  protected $culoare;
  public $greutate;
  public static $nrPicioare;
  const NROCHI = 2;
  protected $values = array();


  public function mananca(int $cantitate)
    {
        echo $this->familie . ' manaca ' . $cantitate .' kg de '.$this->mancare;
        $this->greutate = $this->greutate + $cantitate / 3;
    }
    public function doarme($timp)
    {
        $ora = date('H') + $timp;
        echo 'Amimalul doarme pana la ora ' . $ora;
    }
    public function comunica($fraza)
    {
        echo "acest animal face asa: " . $fraza;
    }

    public function __get($key)
    {

        return $this->values[$key] ?? 'Nu exista';
    }

    public function __set($key, $value)
    {
        $this->values[$key] = $value;
    }


  /**
   * Get the value of familie
   */ 
  public function getFamilie()
  {
    return $this->familie;
  }

  /**
   * Set the value of familie
   *
   * @return  self
   */ 
  public function setFamilie($familie)
  {
    $this->familie = $familie;

    return $this;
  }

  /**
   * Get the value of mancare
   */ 
  public function getMancare()
  {
    return $this->mancare;
  }

  /**
   * Set the value of mancare
   *
   * @return  self
   */ 
  public function setMancare($mancare)
  {
    $this->mancare = $mancare;

    return $this;
  }

  /**
   * Get the value of culoare
   */ 
  public function getCuloare()
  {
    return $this->culoare;
  }

  /**
   * Set the value of culoare
   *
   * @return  self
   */ 
  public function setCuloare($culoare)
  {
    $this->culoare = $culoare;

    return $this;
  }

  /**
   * Get the value of greutate
   */ 
  public function getGreutate()
  {
    return $this->greutate;
  }

  /**
   * Set the value of greutate
   *
   * @return  self
   */ 
  public function setGreutate($greutate)
  {
    $this->greutate = $greutate;

    return $this;
  }

   


  /**
   * Get the value of nrPicioare
   */ 
  public function getNrPicioare()
  {
    return self::$nrPicioare;
  }

  /**
   * Set the value of nrPicioare
   *
   * @return  self
   */ 
  public function setNrPicioare($nrPicioare)
  {
    self::$nrPicioare = $nrPicioare;


  }
}