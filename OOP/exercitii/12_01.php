<?php

// Folosind cunoștințele dobândite în această lecție, creați un tabel în baza de date numită user.
// Tabelul poate avea coloane id, name, password și status.
// După aceea, creați o conexiune la baza de date și codul în sine care va introduce 3 utilizatori, modificați datele celui de-al doilea utilizator și apoi imprimați toți utilizatorii la ieșire.
// După ce descărcarea utilizatorului este completă, ștergeți toți utilizatorii introduși din baza de date.
// Desigur, folosiți biblioteca MySQLi pentru lucru într-o manieră orientată pe obiecte.

// *****************Creating connection ********************

$hostname = "localhost";
$username = "root";
$password = "";
$db = "user";

$connection = new mysqli($hostname, $username, $password, $db);

if($connection->connect_error) {
    die("Connection error: " . $connection->connect_error);
} else {

}

// *****************Creating database ********************


// $sql = "CREATE DATABASE user";

// if($connection->query($sql) === true) {
//     echo "Database created succesfully";
// } else {
//     echo "Error creating database: " . $connection->error;
// }

// *****************Creating table in database ********************

// $sql = "CREATE TABLE user (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     name VARCHAR(30) NOT NULL,
//     password VARCHAR(30) NOT NULL,
//     status VARCHAR(50)
// )";

// if($connection->query($sql) === true) {
//     echo "Table created successfully";
// } else {
//     echo "Error: " . $connection->error;
// }

// *****************Inserting data in table in database ********************

// $sql = "INSERT INTO user (name, password, status)
//         VALUES ('Dan', 'vb1233452', '1')";
// $sql = "INSERT INTO user (name, password, status)
//         VALUES ('Ion', '123dfg45', '2')";
// $sql = "INSERT INTO user (name, password, status)
//         VALUES ('Vasile', '23412345', '2')";

// if($connection->multi_query($sql) === true) {
//     echo "New record added successfully";
// } else {
//     echo "Error: " . $connection->error;
// }

$connection->close();

?>