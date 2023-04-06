<?php

if(isset($_POST['username']) && isset($_POST['password'])){
    if(!empty($_POST['username']) && !empty($_POST['password'])){

        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM user WHERE name='{$username}' LIMIT 1";
        $results = $connection->query($sql);

        if($results->num_rows > 0){
            while($row = $results->fetch_assoc()){
                $usernameDB = $row['username'];
                $passwordDB = $row['password'];
            }
        } else {
            echo "No results.";
        }

        if($username === $usernameDB && $password === $passwordDB){
            session_start();
            $_SESSION["username"] = $username;
            $_SESSION["logged"] = date("d.m.Y H:i:s");

            header("Location: index.php");
        }else{
            header("Location: index.php?message=Error!");
        }

    }
}

?>