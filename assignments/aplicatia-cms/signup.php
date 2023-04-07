<?php
require_once 'autoload.php';
require_once 'includes/functions.php';

if(isset($_POST['username']) && 
   isset($_POST['email']) && 
   isset($_POST['password'])) {
    
    $username = sanitize($_POST['username']);
    $email = sanitize($_POST['email']);
    $password = sanitize($_POST['password']);

    if (empty($username)) {
        $error = "Username required.";
        User::redirect("register.php?error=$error");
        exit;
    } else if (empty($email)) {
        $error = "Email required.";
        User::redirect("register.php?error=$error");
        exit;
    } else if (empty($password)) {
        $error = "Password required.";
        User::redirect("register.php?error=$error");
        exit;
    } else {

        $user = new User();
        $username = strip_tags($username);
        $email = strip_tags($email);
        $password = strip_tags($password);
        $password = password_hash($password, PASSWORD_DEFAULT);

        $register = $user->register($username, $email, $password);

        if ($register) {
            $success = "Registration successful.";
            User::redirect("register.php?error=$success");
            exit;
        } else {
            $error = "Registration failed.";
            User::redirect("register.php?error=$error");
            exit;
        }        

    }

} else {

    $error = "All fields must be filled.";
   
    User::redirect('register.php?error=error');

}