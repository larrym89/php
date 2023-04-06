<?php
// echo "PHP genereaza continut dimanic \"HTML\"\\\"CSS\" . \$x este un exemplu de variabila ";
// echo 'PHP genereaza continut dimanic "HTML"\\"CSS" ';

// $str = <<<'SIR'
// PHP genereaza continut dimanic "HTML"\"CSS" . $x este un exemplu de variabila
// SIR;
// echo $str;

// Functii predefinite pentru prelucrarea sirurilor de caractere
//  strlen(sir) returnează lungimea şirului de caractere
//  trim(sir) elimină spaţiile albe dintr-un şir
//  ltrim(sir) elimină spaţiile albe din stânga şirului
//  rtrim(sir) elimină spaţiile albe din dreapta şirului
//  strtolower(sir) converteşte un şir la litere mici
//  strtoupper(sir) converteşte un şir la litere mar

//Cautarea unei secvente
/*
# verific daca un cuvant sau text apare in sirul
$sir = 'PHP este cel mai folosit limbaj de progrmare!';
if (strstr($sir, 'PHP') !== false) {
print 'am gasit';
} else {
print "nu am gasit";
}
# pentru a nu tine cont de litere mari/mici se foloseste stristr
if (stristr($sir, 'phP') !== false) {
print 'am gasit';
}
 */

/*
//Impartirea (spargerea) sirului
$sir2 ='JAVA stiu, PHP stiu, HTML stiu, CSS stiu, ';
$a = explode( "stiu, ", $sir2 ); // impart dupa stiu<spatiu>
var_export($a);
 */

/*
//Masuri de siguranta
print addslashes( "The code is Jon's" );
# functia inversa este stripslashes();
print htmlspecialchars("<a href='test'>Test code HTML</a>", ENT_QUOTES);
# functia inversa este htmlspecialchars_decode()
print strip_tags( "<p><b>Este scris cu bold</b></p>" ); // E bold
print strip_tags( "<p><b>Este scris cu bold</b></p>", '<b>' ); // E <b>bold</b>
 */

/*
Ap7
Verificare format adresa de email
 */
$email = 'aaaaaa@aaa.com';
if (isset($email)) {
    $adresaEmail = trim(htmlentities($email, ENT_QUOTES));
    $pattern = "/[a-zA-Z0-9_-]{3,30}+@[a-zA-Z0-9-]{3,30}+.[a-zA-Z]{2,4}/";
    if (preg_match($pattern, $adresaEmail)) {
        echo 'Adresa de e-mail este corecta.';
    } else {
        echo 'Adresa de e-mail nu este corecta.';
    }
}


/*
Ap6
*/
$string = 'Acesta este un string.';
if(preg_match('/este/', $string)){
echo 'Cuvantul <b>este</b> a fost gasit in stringul dat.';
} else{
echo 'Cuvantul <b>este</b> nu a fost gasit in stringul dat.';
}


/*
Ap8
*/
$site = 'google.com';
if(isset($site)){

    $site_fara_spatii = trim(htmlspecialchars($site, ENT_QUOTES));
    $pattern = "/^(https?:\/\/)?(www\.)?[a-zA-Z0-9-.]{3,30}([\.])[a-zA-Z]{1,4}$/";
    if(preg_match($pattern, $site_fara_spatii )){
        echo 'Web site-ul este valid.';
    } else{
        echo 'Web site-ul nu este valid.';
    }
}
?>