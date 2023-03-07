<?php

function db_conenct() {
	
//Define connection as a static variable, to avoid connecting more than once

static $connection;

//Try and connect to the database, if a connection has not been established yet;

if(!isset($connection)) {
	$host = "localhost";
	$username = "root";
	$password = "";
	$dbname = "phones";
	
	$connection = mysqli_connect($host, $username, $password, $dbname);
}

if($connection === false) {
	
	//Handle Error;
	return mysqli_connect_error();
}

return $connection;
	
}

function db_query($query){
	

$connection = db_conenct();

$result = mysqli_query($connection, $query);

return $result;

}

$result = db_query("SELECT * FROM mobile_phones");


if($result === false) {
	// Handle failure
	die("Query error");
	
} else {
	
	// Fetch all tghe rows in an array
	$rows = array();
	while($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
}

function db_select($query) {
	
	$rows = array();
	$result = db_query($query);
	
	//If query failed return false;
	if($result === false) {
		return false;
	}
	
	//If query was succsesful , erturn all the rows in an array;
	while($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
	
}

//***************************************
$rows = db_select("SELECT * FROM mobile_phones");
if($rows === false) {
	die("Error");
} else {
	
	foreach($rows as $row) {
		foreach($row as $key=>$value) {
			echo ucfirst($key) . ": " . $value . "<br>";
		}
		echo "-----------------------------<br>";
	}
	
}

?>