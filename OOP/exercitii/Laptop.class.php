<?php

class Laptop{
    public $manifacturer;
    public $model;
    public $price;
    public $color;
    public $size;

    public function __construct($manifacturer, $model, $price){
        $this->manifacturer = $manifacturer;
        $this->model = $model;
        $this->price = $price;
    }

    public function __get($property) {
        if (property_exists($this, $property)) {
          return $this->$property;
        }
      }
    
      public function __set($property, $value) {
        if (property_exists($this, $property)) {
          $this->$property = $value;
        }
    
        return $this;
      }

    public function info(){
        if(!empty($this->color) && !empty($this->size)){
            $return = 
            "<ul>
                <li>Manifacturer: " . $this->manifacturer . "</li>
                <li>Model: " . $this->model . "</li>
                <li>Price: " . $this->price . "</li>
                <li>Color: " . $this->color . "</li>
                <li>Size: "  . $this->size  . "</li>
            </ul>";
        }else{
            $return = 
            "<ul>
                <li>Manifacturer: " . $this->manifacturer . "</li>
                <li>Model: " . $this->model . "</li>
                <li>Price: " . $this->price . "</li>
            </ul>";
        }

        return $return;
        
    }
}

$surface_pro = new Laptop("Microsoft", "Surface Pro", "2000");
$surface_pro->color = "Grey";
$surface_pro->size = "12.9";
echo $surface_pro->info();

$surface_book = new Laptop("Microsoft", "Surface Book", "4000");
$surface_book->color = "Grey";
$surface_book->size = "15.0";
echo $surface_book->info();