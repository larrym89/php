<?php
// https://www.w3resource.com/php-exercises/
// Calculul si afisarea sumei cifrelor unui numar 
//natural n.
// Date de intrare numar Ex. $n = 123454321
// Date  de iesire  suma = 1+2+3+4+5+4+3+2+1 = 25






declare(strict_types=1);
function sumaCifre( int $n):int{
    ($n<0)?$n = $n* (-1): $n = $n;
    $s=0; //initializarea sumei cu 0 
    while($n>0) { 
        $ultimaCifra = $n % 10; // determina ultima cifra a numarului
        $s=$s + $ultimaCifra; //adaugarea ultimei cifre la suma 
        $n= (int) ($n / 10); // taierea ultimei cifre a variabilei n 
    } 
    return $s; // returneaza sumei
}

$suma = sumaCifre(-12);
echo $suma;