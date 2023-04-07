<?php
require_once 'autoload.php';
require_once 'includes/functions.php';

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (
    isset($_POST['username']) && isset($_POST['password'])
) {

    $uname = sanitize($_POST['username']);
    $pass = sanitize($_POST['password']);



    if (empty($uname)) {
        $error = "User name is required";
        User::redirect("login.php?error=$error");
        exit;
    } else if (empty($pass)) {
        $error = "Password is required";
        User::redirect("login.php?error=$error");
        exit;
    } else {

        $user = new User();
        $user->setUsername($uname);
        $user->setPassword($pass);

        if ($user->login($uname, $pass)) {
            User::redirect("index.php");
        } else {
            $error = "Incorrect username or password";
            User::redirect("login.php?error=$error");
        }
    }
} else {
    User::redirect("login.php?error=error");
}
