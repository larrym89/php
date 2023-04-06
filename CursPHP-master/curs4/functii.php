<?php
echo "Salut, asa scriu mult si pierd timp! <br>\n";
echo "Salut, asa scriu mult si pierd timp! <br>\n";
echo "Salut, asa scriu mult si pierd timp! <br>\n";

// 1. functia salut
// function salut()
// {
//     echo "Salut, eu sunt prima functie! Scrii cod o singura data. <br>";
// }
// // rulez functia / apelez functia
// salut();
// // O apelez iar
// salut();
// // O apelez iar
// salut();

// 2. O functie in interiorul altei functii
// function dimineata()
// {
//     echo "Buna dimineata! <br>";

//     function pranz()
//     {
//         echo "Buna ziua! <br>";
//     }
// }
// dimineata();
// pranz();//nu putem accesa functia pranz() daca nu  apela inainte functia dimineata()

// 3. O functia, cu parametrii, care calculeaza si afiseaza suma a 2 numere
// function suma($a, $b=10)
// {
//     echo $a + $b;
//     echo "<br>";
// }
// suma('3', 67);
// suma(343, 6227);
// suma(231, 345678);
// suma(1034);// ok


// 4. O functia, cu parametrii in care se specifica tipul de date, care calculeaza si reurneaza o valoare
// declare(strict_types=1); // strict requirement
// function suma_strict(int $a, int $b) : float {
//     $s =  $a + $b;
//    return $s;

// }
// suma_strict('3', 67);//error
// suma_strict(33, 67);//ok
// 

// 5. O functie care primeste un parametru prin referinta
// O functie ce va calcula cubul unui numar
//  function cubul (&$cub){
//         $cub = $cub * $cub * $cub;

//  }
//  $x = 15;
//  cubul($x);
//  echo $x;

// 5.1 Alta functie ce primeste parametru prin referinta
// function schimbaNume(& $nume)
// {
//     $numeTata = "Popescu";
//     $nume = $numeTata;
//     echo "Toata familia acum are nume schimbat ", $nume, "<br>\n";
// }

// $numeMama = "Ionescu";
// $numeCopil='';
// schimbaNume($numeMama);
// schimbaNume($numeCopil);
// echo $numeMama;
// echo $numeCopil;


//5.2 functie ce returneaza valori prin referinta
function & schimbaAnotimp($anotimp) {
//function & schimbaAnotimp( & $anotimp) {
    $anotimp = 'Primavara';
    return $anotimp;
}

$a = 'Iarna';
echo "\$a este inanite sa schimbaAnotimp(): $a\n";
//$b = schimbaAnotimp($a); 
 $b = & schimbaAnotimp($a); 
echo "\$a este dupa ce am schimbaAnotimp(): $a\n";
$b = 'Vara';
echo "\$a dupa ce am modificat valoarea anotimpului b: $a\n";

// 6. functie ce va genera un CNP
/**
 * Generare CNP ptr anumiti parametri sex,varsta,rezident
 * 
 * @example generareCnp(1,19)
 * https://github.com/razvandimescu/cnp/blob/gh-pages/js/custom.js
 * @return cnp Cnp aleator valid
 */
    // function generareCnp($sex,$varsta,$rezident=false) {
    //     $errorMsg   = 'Eroare parametrii incorecti!';
    //     $sirCiudat  ='279146358279';
    //     $strain     = ($sex==9) ? true:false;
    //     $sexVector =array('1','2','9'); //9 pentru rezident
    //     //Verificarile datelor
    //     if(!in_array($sex,$sexVector)) {
    //          return $errorMsg;
    //     }
    //     if (!is_bool($rezident)) {
    //          return $errorMsg;
    //     }
    //     $an=date('Y')-$varsta;
    //     // Daca s-a nascut inainte de 1900 $sex = 3 sau 4
    //     if ( $an < 1900 && !$rezident && !$strain) $sex = $sex + 2;
    //     // Daca s-a nascut dupa 2000 $sex = 5 sau 6  
    //     if ( $an > 2000 && !$rezident && !$strain)  $sex = $sex + 4; 
    //     //daca este rezident 
    //     if ($rezident) $sex = $sex+6;
    //     $luna=rand(1,12);
    //     $zi = rand(1,31);
    //     //daca este un copil care s-a nascut anul acesta atunci avem grija ca data generata sa nu fie mai mare decat data de azi
    //     if ($an == date('Y')) { 
    //         $luna = rand(1,date('m'));
    //         $zi = rand(1,date('d'));
    //     }

    //     $date = new DateTime($an.'-'.$luna.'-'.$zi);

    //     $judet=rand(1,52);
    //     $judet=($judet<10) ? '0'.$judet : $judet;
    //     $control = rand(1,999);
    //     if ($control<10) { 
    //         $control='00'.$control; 
    //     }
    //     else if ($control<100) {
    //         $control='0'.$control;
    //     }
    //     $cnp =  $sex . $date->format("ymd") . $judet.$control;
    //     $suma=0;
    //     for($i=0;$i<=11;$i++) {
    //         $suma+=$sirCiudat[$i]*$cnp[$i];
    //     }
    //     $rest = $suma%11;
    //     $cifraControl = ($rest==10) ? 1 : $rest;
    //     $cnp.=$cifraControl;
    //     if (strlen($cnp)!=13 ) {
    //          return $errorMsg;
    //     }
    //     else return $cnp;

    // }
    // echo generareCnp(rand(1,2),rand(0,110))."<br>";
    



    // 7. functie care verifica daca un CNP este corect sau nu
    /*
    https://ro.wikipedia.org/wiki/Cod_numeric_personal
    https://github.com/cristian-datu/CNP/blob/master/cnp.php
    */
    // function validCNP($p_cnp)
    // {
    //     // CNP must have 13 characters
    //     if (strlen($p_cnp) != 13) {
    //         return false;
    //     }
    //     $cnp = str_split($p_cnp);
    //     unset( $p_cnp );
    //     $hashTable  = array( 2, 7, 9, 1, 4, 6, 3, 5, 8, 2, 7, 9 );
    //     $hashResult = 0;
    //     // All characters must be numeric
    //     for ($i = 0; $i < 13; $i++) {
    //         if ( ! is_numeric($cnp[$i])) {
    //             return false;
    //         }
    //         $cnp[$i] = (int) $cnp[$i];
    //         if ($i < 12) {
    //             $hashResult += (int) $cnp[$i] * (int) $hashTable[$i];
    //         }
    //     }
    //     unset( $hashTable, $i );
    //     $hashResult = $hashResult % 11;
    //     if ($hashResult == 10) {
    //         $hashResult = 1;
    //     }
    //     // Check Year
    //     $year = ( $cnp[1] * 10 ) + $cnp[2];
    //     switch ($cnp[0]) {
    //         case 1  :
    //         case 2 :
    //             $year += 1900;
    //             break; // cetateni romani nascuti intre 1 ian 1900 si 31 dec 1999
    //         case 3  :
    //         case 4 :
    //             $year += 1800;
    //             break; // cetateni romani nascuti intre 1 ian 1800 si 31 dec 1899
    //         case 5  :
    //         case 6 :
    //             $year += 2000;
    //             break; // cetateni romani nascuti intre 1 ian 2000 si 31 dec 2099
    //         case 7  :
    //         case 8 :
    //         case 9 :                // rezidenti si Cetateni Straini
    //             $year += 2000;
    //             if ($year > (int) date('Y') - 14) {
    //                 $year -= 100;
    //         }
    //             break;
    //         default : {
    //             return false;
    //         }
    //             break;
    //     }
    //     return ( $year > 1800 && $year < 2099 && $cnp[12] == $hashResult );
    // }
    // echo validCNP('1930101021162');
    // echo validCNP('6070510508288');
