<?php
/*
Se da un array cu ('tara'=>'capitala') sa se afiseza ordonat alfabetic :
1. dupa capitala
2. dupa tara

*/
$ceu = array(
    "Italy" => "Rome", "Luxembourg" => "Luxembourg",
    "Belgium" => "Brussels", "Denmark" => "Copenhagen",
    "Finland" => "Helsinki", "France" => "Paris",
    "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana",
    "Germany" => "Berlin", "Greece" => "Athens",
    "Ireland" => "Dublin", "Netherlands" => "Amsterdam",
    "Portugal" => "Lisbon", "Spain" => "Madrid",
    "Sweden" => "Stockholm", "United Kingdom" => "London",
    "Cyprus" => "Nicosia", "Lithuania" => "Vilnius",
    "Czech Republic" => "Prague", "Estonia" => "Tallin",
    "Hungary" => "Budapest", "Latvia" => "Riga", "Malta" => "Valetta",
    "Austria" => "Vienna", "Poland" => "Warsaw"
);
ksort($ceu);
foreach ($ceu as $country => $capital) {
    echo "Capitala  tarii : $country este:  $capital" . "<br>";
}
