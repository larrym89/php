<?php

class Circle {

    const PI = 3.14;
    public $radius;

    function __construct($radius) {
        $this->radius = $radius;
    }

    function calc_area() {
        return $this->radius * $this->radius * Circle::PI;
    }

    function calc_circle() {
        return 2 * $this->radius * Circle::PI;
    }

}

$c1 = new Circle(10);
echo $c1->calc_circle() . "<br>";
echo $c1->calc_area() . "<br>"; 