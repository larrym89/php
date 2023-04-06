<?php

if (isset($_GET['id'])) {

    $id = $_GET['id'];
    require("Connection.php");
    $instance = Connection::getInstance();
    $conn = $instance->getConnection();

    $query = "DELETE FROM mobilephones WHERE id = {$id}";

    mysqli_query($conn, $query);

    header("Location: ../index.php");
}
