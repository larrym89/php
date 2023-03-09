<?php

// ********** Create Connection **********
$connection = new PDO("mysql:host=localhost;dbname=user", "root", "");

// ********** Prepeare SQL Query **********
$query = $connection->prepare("INSERT INTO user (id, name, password, status) VALUES (null, :name, :password, :status)");

// ********** Insert Users **********

$name = "Jim";
$password = "123";
$status = "1";
$query->bindParam(":name", $name);
$query->bindParam(":password", $password);
$query->bindParam(":status", $status);
$query->execute();

$name = "Mohaew";
$password = "123";
$status = "2";
$query->bindParam(":name", $name);
$query->bindParam(":password", $password);
$query->bindParam(":status", $status);
$query->execute();

// ********** Update Users **********
$sql = "UPDATE user SET name='Ionutel' WHERE name='Ion'";

$result = $connection->prepare($sql);
$result->execute();

echo $result->rowCount() . " records updated <br>";

// ********** Show users **********
$sql = $connection->prepare("SELECT * FROM user");
$sql->execute();

$result = $sql->setFetchMode(PDO::FETCH_ASSOC);
$result = $sql->fetchAll();

foreach($result as $column => $value) {
    echo "id: " . $value['id'] . " -Name: " . $value['name'] . " -Password: " . $value['password'] . " -Status: " . $value['status'] . "<br>";
}

// ********** Delete Users **********
$sql = "DELETE FROM user WHERE name='Ionel'";
$connection->exec($sql);
echo "User deleted successfully";

