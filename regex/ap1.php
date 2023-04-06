<?php

$email = 'aaaaa@hmhm.com';
if(isset($email)) {
    $adresaEmail = trim(htmlentities($email, ENT_QUOTES));
    $pattern = '/^[a-zA-Z0-9_-]{3,30}@[a-zA-Z0-9_-]{3,30}.[a-zA_Z]{2,4}$/';

    if(preg_match($pattern, $adresaEmail)) {
        echo 'Adresa mail corecta';
    } else {
        echo 'Adresa mail incorecta';
    }
}

echo '<br>';

$site = 'https://www.google.ro';

if(isset($site)) {
    $siteFaraSpatii = trim(htmlentities($site, ENT_QUOTES));
    $pattern2 = '/^(https?:\/\/)?(www.)?[a-zA-Z0-9-.]{3,30}.[a-zA-Z]{1,4}$/';

    if(preg_match($pattern2, $siteFaraSpatii)) {
        echo 'Adresa este valida';
    } else {
        echo 'Adresa nu este valida';
    }
}