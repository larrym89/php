<?php
//asa nu 
// interface VehicleInterface {
//     public function drive();
//     public function fly();
// }

// class FutureCar implements VehicleInterface {
    
//     public function drive() {
//         echo 'Driving a future car!';
//     }
  
//     public function fly() {
//         echo 'Flying a future car!';
//     }
// }

// class Car implements VehicleInterface {
    
//     public function drive() {
//         echo 'Driving a car!';
//     }
  
//     public function fly() {
//         throw new Exception('Not implemented method');
//     }
// }

// class Airplane implements VehicleInterface {
  
//     public function drive() {
//         throw new Exception('Not implemented method');
//     }
    
//     public function fly() {
//         echo 'Flying an airplane!';
//     }
// }

// asa da 

interface CarInterface {
    public function drive();
}

interface AirplaneInterface {
    public function fly();
}

class FutureCar implements CarInterface, AirplaneInterface {
    
    public function drive() {
        echo 'Driving a future car!';
    }
  
    public function fly() {
        echo 'Flying a future car!';
    }
}

class Car implements CarInterface {
    
    public function drive() {
        echo 'Driving a car!';
    }
}

class Airplane implements AirplaneInterface {
    
    public function fly() {
        echo 'Flying an airplane!';
    }
}