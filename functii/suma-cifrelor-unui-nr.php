<?php
//Calculul si afisarea cifrelor unui nr natural n
//Data de intrare $n = 123454321
// Date de iesire $suma = 1+2+3+4+5+4+3+2+1 = 25

declare(strict_types=1);

function sumaCifre(int $n):int {

    $s = 0; //initial;izarea sumei cu 0
    while($n>0){
        $ultimaCifra = $n % 10; // determinam ultima cifra
        $s = $s + $ultimaCifra; //adaugarea ultimei cifre la suma
        $n = (int) ($n / 10); // taierea ultimei cifrei ptr a obtine intregul
    }

    return $s;

}

$suma = sumaCifre(173);

echo $suma;