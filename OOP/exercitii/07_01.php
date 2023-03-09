<?php

abstract class Laptop {

    public $manifacturer;
    public $model;
    public $price;

    public abstract function info();
}

class MicrosoftLaptop extends Laptop {

    public $touchscreen;

    public function __construct($manifacturer, $model, $price, $touchscreen) {
        $this->manifacturer = $manifacturer;
        $this->model = $model;
        $this->price = $price;
        $this->touchscreen = $touchscreen;
    }

    public function info() {
        $return = "<ul>
        <li>Manifacturer: " . $this->manifacturer . "</li>
        <li>Model: " . $this->model . "</li>
        <li>Price: " . $this->price . "</li>
        <li>Touchscreen: " . $this->touchscreen . "</li>
    </ul>";

    return $return;

    }

}

class AppleLaptop extends Laptop {

    public $touchbar;

    public function __construct($manifacturer, $model, $price, $touchbar) {
        $this->manifacturer = $manifacturer;
        $this->model = $model;
        $this->price = $price;
        $this->touchbar = $touchbar;
    }

    public function info() {
        $return = "<ul>
        <li>Manifacturer: " . $this->manifacturer . "</li>
        <li>Model: " . $this->model . "</li>
        <li>Price: " . $this->price . "</li>
        <li>Touchbar: " . $this->touchbar . "</li>
    </ul>";

    return $return;

    }

}

$imac = new AppleLaptop("Apple", "imac2", "$500", "yes");
echo $imac->info();

$asus = new AppleLaptop("Asus", "Geme3", "$1500", "yes");
echo $asus->info();