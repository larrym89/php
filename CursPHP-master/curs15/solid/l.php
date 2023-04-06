<?php
// asa da , clasa copil poate sa inlocuiasca clasa parinte
interface CoffeeMachineInterface {
    public function brewCoffee($selection);
}


class BasicCoffeeMachine implements CoffeeMachineInterface {
  
    public function brewCoffee($selection) {
        switch ($selection) {
            case 'ESPRESSO':
                return $this->brewEspresso();
            default:
                return 'Selection not supported';
        }
    }
    
    protected function brewEspresso() {
        // Brew an espresso...
    }
}


class PremiumCoffeeMachine extends BasicCoffeeMachine {
  
    public function brewCoffee($selection) {
        switch ($selection) {
            case 'ESPRESSO':
                return $this->brewEspresso();
            case 'VANILLA':
                return $this->brewVanillaCoffee();
            default:
                return 'Selection not supported';
        }
    }
    
    protected function brewVanillaCoffee() {
        // Brew a vanilla coffee...
    }
}


function getCoffeeMachine(User $user) {
    switch ($user->getPlan()) {
        case 'PREMIUM':
            return new PremiumCoffeeMachine();
        case 'BASIC':
        default:
            return new BasicCoffeeMachine();
    }
}


function prepareCoffee(User $user, $selection) {
    $coffeeMachine = getCoffeeMachine($user);
    return $coffeeMachine->brewCoffee($selection);
}