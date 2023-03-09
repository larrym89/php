<?php
// modificatorii de acces la Mostenire
class A {
  public $public = 'Public';
  protected $protected = 'Protected';
  private $private = 'Private';

  public function testVisibilityA() {
     echo $this->public;
     echo $this->protected;
     echo $this->private;
  }
}

// --

$a = new A();
var_dump($a);
//echo $a->public; // Public
//echo $a->protected; // Fatal error
//echo $a->private; // Fatal error
//$a->testVisibilityA(); // Public, Protected, Private

// --

class B extends A {

  public function testVisibilityB() {
     echo $this->public;
     echo $this->protected;
     echo $this->private;// Notice: Undefined, pentru ca nu mosteneste aceasta proprietate
  }
  public function testVisibilityB_correct() {
    echo $this->public;
    echo $this->protected;
    
 }
}

// --

$b = new B();
var_dump($b);
echo $b->public; // Public
//echo $b->protected; // Fatal error
//echo $b->private; // Fatal error
$b->testVisibilityA(); // Public, Protected, Private
$b->testVisibilityB(); // // Notice: Undefined, $this->private
$b->testVisibilityB_correct(); // Public, Protected,