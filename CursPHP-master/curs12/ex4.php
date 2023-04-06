<?php

// daca dorim sa blocam ca o metoda sa nu fie suprascrisa : final
  class Adunare
{
    final public function suma($x, $y)
    {
        $sum = $x + $y;
        return $sum;
    }

}

class Produs extends Adunare
{
    //Fatal error: Cannot override final method Adunare::suma() 
    public function suma($x, $y)
    {
        $sum = $y + $x;
        return $sum;
    }
    public function prod($x, $y)
    {
        //$mult = $x * $y;
        $mult = 0;
        for($i=1;$i<=$y;$i++){
            $mult = $this->suma($x,$mult);
        }
        return $mult;

    }

}

$obj = new Produs();
echo "Suma este: " .$obj->suma(100, 100);
echo "Produsul este: ".$obj->prod(2, 5);
