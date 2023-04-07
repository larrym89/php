<?php
require('autoload.php');
require_once 'includes/functions.php';


if (session_status() == PHP_SESSION_NONE) {
    session_start();
}


if (User::is_loggedin() !== true) {
    User::redirect('login.php');
}

$user_id = $_SESSION['user_session'];

$post_id = $_GET['id'];


// echo var_dump($post_id);

$content = sanitize($_POST["comments"]);

if (isset($_POST['comments']) && !empty($_POST['comments'])) {

    if (empty($content)) {
        $error = "Please enter a comment";
        User::redirect("comments.php?error=$error");
    } else {
        $comment = new Comments();
        $comment->setContent($content);
        $comment->setUserId($user_id);
        $comment->setPostId($post_id);
        $comment->create();
        User::redirect("article.php?id=$post_id");
    }
} else {
    $error = "Please enter a comment";
    User::redirect("comments.php?error=$error");
}
