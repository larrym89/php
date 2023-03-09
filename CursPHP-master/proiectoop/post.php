<?php
if (!isset($_SESSION)) {
    session_start();
}
require_once 'autoload.php';
if(User::is_loggedin() !== true)
{
	// daca nu este logat fac redirect
	User::redirect('listacarti.php');
}
$time = date('d-M-Y');
if (isset($_POST) & !empty($_POST)) {
    $carte = new Carti();
    $carte ->setTitlu($_POST['titlu']);
    $carte ->setAutor($_POST['autor']);
    $carte ->setEditura($_POST['editura']);
    $carte ->setAn($_POST['an']);
    $carte ->setPret($_POST['pret']);
    $carte ->setNrPagini($_POST['pagini']);
    $carte ->setTipCarte($_POST['tip_carte']);
    if(isset($_FILES["poza"]) && !empty($_FILES["poza"])){
        $carte->setPoza($_FILES["poza"]);
    }

    $res = $carte->create();
    if ($res) {
        echo "Datele au fost introduse cu succes!";
        header("Location: /cursoop/proiectoop/afisare_carti.php");
    } else {
        echo "Eroare insert data";

    }
}
