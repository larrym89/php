
<?php 
// PHP program care transforma un numardin baza 10 in baza 2

function decToBinary($n) 
{ 
    $binaryNum=[]; //un arrai in care salvez numarul in baza 2
  
    $i = 0;   // counter for binary array  
    while ($n > 0)  
    { 
        // in binary array 
        $binaryNum[$i] = $n % 2; // resturile la impoartirea cu 2 vor form  numarul in baza 2
        $n = (int)($n / 2); 
        $i++; 
    } 
  
    // printing binary array 
    // in reverse order 
    for ($j = $i - 1; $j >= 0; $j--) 
        echo $binaryNum[$j]; 
} 

$n = 17; 
decToBinary($n); 

// Metoda 2
echo base_convert($n, 10, 2);
  