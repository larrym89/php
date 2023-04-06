<?php

// daca dorim sa blocam ca o clasa sa nu fie mostenita folosim  final
 final class Adunare
{
    public function suma($x, $y)
    {
        $sum = $x + $y;
        return $sum;
    }

}
// Fatal error: Class Produs may not inherit from final class (Adunare)
class Produs extends Adunare
{
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
