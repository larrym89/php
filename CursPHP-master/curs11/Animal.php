<?php

class Animal
{

    // in  PHP >= 7.4 private string $familie;
    private $familie;
    protected $mancare;
    protected $culoare;
    public $greutate;
    public static $nrPicioare;
    const NROCHI = 2;
    protected $values = array();

    public function __construct()
    {
        echo " S-a nascut un nou animal!";
    }
    public function __destruct()
    {
        echo "Animalul a fost sters din memorie";
    }

    // getter si getter general pentru toate proprietatile clasei
    // public function __get($property) {
    //     if (property_exists($this, $property)) {
    //         return $this->$property;
    //     }
    // }

    // public function __set($property, $value) {
    //     if (property_exists($this, $property)) {
    //         $this->$property = $value;
    //     }
    // }
    public function __get($key)
    {

        return $this->values[$key] ?? 'Nu exista';
    }

    public function __set($key, $value)
    {
        $this->values[$key] = $value;
    }
    public function __clone()
    {
        echo "S-a clonat un  animal!";
    }

    /**
     * Get the value of familie
     */
    public function getFamilie(): string
    {
        return $this->familie;
    }

    /**
     * Set the value of familie
     *
     * @return  self
     */
    public function setFamilie(string $familie)
    {
        $this->familie = $familie;
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

    }

    /**
     * Get the value of nrPicioare
     */
    public static function getNrPicioare()
    {
        return self::$nrPicioare;
    }

    /**
     * Set the value of nrPicioare
     *
     * @return  self
     */
    public static function setNrPicioare($nrPicioare)
    {
        self::$nrPicioare = $nrPicioare;

    }

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
}
