<?php
//Q. Looking at the code below, what will the script return?
function numara_0() { 
    $i = 0; 
    echo $i++; 
}
numara_0(); 
numara_0(); 
numara_0(); 
numara_0(); 

//Q. Looking at the code below, what will the script return?
function numara_1() { 
    static $i = 0; 
    echo $i++; 
}
numara_1(); 
numara_1(); 
numara_1(); 
numara_1(); 




// //Q. Looking at the code below, what will the script return?
// class Test { 
//     private $nota = 1; 
//     function punctaj() { 
//       return function() { 
//         //var_dump($this); 
//         echo $this->nota;
//       }; 
//     } 
//   } 
   
//   $object = new Test; 
//   $f = $object->punctaj();
//   $f();


// //Q. Looking at the code below, what will the script return?
// class Template
// {
//     protected $template_name;

//     public function __construct() {
//    	  $this->template_name = 'innovation_card';
//     }

// 	public static function getTemplateName() {
//       return $this->template_name;
// 	}
// }
// $b = new Template;
// Template::getTemplateName();




// //Q. Looking at the code below, what will the script return?

// class Demo { 
//     private $total = 0; 
//     private $count = 0; 
     
//     // getter for current count 
//     public static function getCount() { 
//       return self::$count; 
//     } 
 
//    // increment count and total 
//    public function __construct() { 
//      ++self::$total; ++self::$count; 
//    } 
//    // decrement count public 
//    function __destruct() { 
//      --self::$count; 
//    } 
// }
// $obj = NEW Demo;
// echo $obj->getCount();


 //Q. Looking at the code below, what will the script return?
 //  Late static binding     
class Car 
{ 
    public static $name = 'Tesla'; 
    public static function getCar() 
    { 
        return "The car name is : " . self::$name; 
    } 
    public static function getOwner() 
    { 
        echo static::getCar(); 
    } 
} 
class newCar extends Car 
{ 
  
    public static function getCar() 
    { 
  
        return "The car name is : " . self::$name .  
                        " and owner is Anshu."; 
    } 
  
} 
Car::getOwner(); 
echo "\n"; 
newCar::getOwner(); 