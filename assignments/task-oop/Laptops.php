<?php
namespace laptops;
?>


<?php

interface iLaptop{
    public function info();
}

trait laptop{
    public $manifacturer;
    public $model;
    public $price;
}

class MicrosoftLaptop implements iLaptop{
    use laptop;
    public $touchscreen;

    /**
     * Constructor which will take in all the parameters we need for this class to function properly.
     *
     * @param [string] $manifacturer
     * @param [string] $model
     * @param [string] $price
     * @param [string] $touchscreen
     */

    public function __construct($manifacturer, $model, $price, $touchscreen){
        $this->manifacturer = $manifacturer;
        $this->model = $model;
        $this->price = $price;
        $this->touchscreen = $touchscreen;
    }

    /**
     * Method which will return formatted string with HTML with all the data for this class/object.
     *
     * @return string
     */

    public function info(){
        return 
        "<ul>
            <li>Manifacturer: " . $this->manifacturer . "</li>
            <li>Model: " . $this->model . "</li>
            <li>Price: " . $this->price . "</li>
            <li>Touchscreen: " . $this->touchscreen . "</li>
        </ul>";
    }
}

class AppleLaptop implements iLaptop{
    use laptop;
    public $touchbar;

    /**
     * Constructor which will take in all the parameters we need for this class to function properly.
     *
     * @param [string] $manifacturer
     * @param [string] $model
     * @param [string] $price
     * @param [string] $touchscreen
     */

    public function __construct($manifacturer, $model, $price, $touchbar){
        $this->manifacturer = $manifacturer;
        $this->model = $model;
        $this->price = $price;
        $this->touchbar = $touchbar;
    }

    /**
     * Method which will return formatted string with HTML with all the data for this class/object.
     *
     * @return string
     */

    public function info(){
        return 
        "<ul>
            <li>Manifacturer: " . $this->manifacturer . "</li>
            <li>Model: " . $this->model . "</li>
            <li>Price: " . $this->price . "</li>
            <li>Touchbar: " . $this->touchbar . "</li>
        </ul>";
    }
}

$surface_book = new MicrosoftLaptop("Microsoft", "Surface Book", "3000", "Yes");
echo $surface_book->info();

$macbookair = new AppleLaptop("Apple", "M2", "1320", "Yes");
echo $macbookair->info();