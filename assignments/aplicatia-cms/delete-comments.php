<?php
require('autoload.php');
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}


$comment = new Comments();
if (isset($_GET['comment_id']) && !empty($_GET['comment_id'])) {
$comment_id = $_GET['comment_id'];
}
$comment->delete($comment_id);

User::redirect('index.php');

