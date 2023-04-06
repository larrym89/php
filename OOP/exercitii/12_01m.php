<?php

echo "<hr>";
// *****************Create connection ********************

$connection = new mysqli("localhost", "root", "", "user");

if($connection->error ) {
    echo "Error : " . $connection->error;
}


// *****************Insert users ********************

// $stmt = $connection->prepare("INSERT INTO user (id, name, password, status) VALUES (null, ?, ?, ?)");

// $name = "Ion";
// $password = "123macac";
// $status = "1";
// $stmt->bind_param("sss", $name, $password, $status);
// $stmt->execute();

// $name = "Dan";
// $password = "123macac";
// $status = "2";
// $stmt->bind_param("sss", $name, $password, $status);
// $stmt->execute();

// $name = "Ionel";
// $password = "123macac";
// $status = "1";
// $stmt->bind_param("sss", $name, $password, $status);
// $stmt->execute();

// // Close prepared statement
// $stmt->close();

// *****************Update users ********************

$sql = "UPDATE user SET name='Danut' WHERE name='Dan'";

if($connection->query($sql) === true) {
    echo "Updated record successfully";
}

// *****************Show users ********************

$sql = "SELECT id, name, password, status FROM user";
$result = $connection->query($sql);

if($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo "id: " . $row['id'] . " -Name: " . $row['name'] . " -Password: " . $row['password'] . " -Status: " . $row['status'] . "<br>";
    } 
    
} else {
    echo "No results found";
}

// *****************Delete users ********************

$sql = "DELETE FROM user WHERE name='Danut'";

if($connection->query($sql) === true) {
    echo "Successfully deleted";
}

$connection->close();