<?php 

$hostname = "localhost";
$username = "root";
$password = "";
$db = "music_albums";

$conn = mysqli_connect($hostname, $username, $password, $db);

if(!$conn) {

    die("Connection Failed" . mysqli_connect_error());

}

?>