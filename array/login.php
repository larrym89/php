<?php

$users = array(

    1=>array(
        'username'=>'user1',
        'password'=>'password1',
        'access'=>'administrator'
    ),
    2=>array(
        'username'=>'user2',
        'password'=>'password2',
        'access'=>'user'
    ),
    3=>array(
        'username'=>'user3',
        'password'=>'password3',
        'access'=>'user'
    ),
    4=>array(
        'username'=>'user4',
        'password'=>'password4',
        'access'=>'user'
    ),
    5=>array(
        'username'=>'user1',
        'password'=>'password1',
        'access'=>'user'
    ),

);

function login($username, $password) {


    if(isset($users) && is_array($users)) {
        foreach ($users as $user) {
            if (isset($user) && is_array($user)) {
                foreach ($user as $key => $value) {
                    if($username == $user[$value]) {
                        echo $username;
                    }
                }
            }
        }
    }


}

login('user1', 'admin');

?>

<!-- 
7. Aplicatie
Sa se genereze un array cu utilizatorii unei aplicatii
$utilizatori = array(1=> 
array(‘username’=>’admin’,’password’=>’654321’,’nivelacces’=>’administrator’),
2=>…
);
Sa se construiasca functia login care primeste două variabile, $user si $password
-trebuie verificata existenta utilizatorului cu numele si parola transmisa
-daca utilizatorul exista, trebuie scris mesajul ‘Salut $user’
-daca utilizatorul nu exista, trebuie scris mesajul ‘Invalid User’
-daca utilizatorul nu este unic trebuie scris mesajul ‘User duplicat -->