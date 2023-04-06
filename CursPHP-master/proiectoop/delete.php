<?php
require_once 'autoload.php';
if (!isset($_SESSION)) {
    session_start();
}
if(User::is_loggedin() !== true)
{
	// daca nu este logat fac redirect
	User::redirect('listacarti.php');
}
$id = $_GET['id'];
$carte = new Carti();
$res = $carte->delete($id);
if($res){
	header('location: afisare_carti.php');
}else{
	echo "Failed to Delete Record";
}


?>