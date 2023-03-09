<?php
$car = new class(4, 'Negru', 'BMW') {
    private $num_roti;
    private $culoare;
    private $model;
 
    function __construct($num_roti, $culoare, $model)
    {
        $this->num_roti = $num_roti;
        $this->culoare = $culoare;
        $this->model = $model;
    }
 
    public function getRoti()
    {
        return $this->num_roti;
    }
 
    public function getCuloare()
    {
        return $this->culoare;
    }
 
    public function getModel()
    {
        return $this->model;
    }
}; 
 
echo $car->getRoti();
echo "<br>";
echo $car->getCuloare();
echo "<br>";
echo $car->getModel();