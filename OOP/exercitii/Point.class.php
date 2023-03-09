<?php 

class Point {

    public $x;
    public $y;

    public function show() {
        echo "Point x: " . $this->x . " y: " . $this->y;
    }

}

$p = new Point();
$p->x = "23";
$p->y = "15";
$p->show();

?>