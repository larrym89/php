<?php
require('autoload.php');


$post = new Posts();
$id = $_GET['id'];
$post->delete($id);

User::redirect('index.php');
