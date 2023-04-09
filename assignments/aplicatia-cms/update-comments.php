<?php
require('autoload.php');
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$content = $_POST['comments'];

$comment = new Comments();
if (isset($_GET['comment_id']) && !empty($_GET['comment_id'])) {
$comment_id = $_GET['comment_id'];
}
$comment->update($comment_id, $content);

User::redirect('index.php');

