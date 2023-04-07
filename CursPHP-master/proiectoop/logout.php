<?php
if (!isset($_SESSION)) {
    session_start();
}
require_once 'autoload.php';
$utilizatori = new User();
$utilizatori->logout();
User::redirect('login.php');
exit;
?>