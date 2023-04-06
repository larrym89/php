<?php
// echo "Sunt in fisierul post.php";
//  echo "<pre>";
//  print_r ($_POST); die;
// print_r($_FILES);
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

//https://www.w3schools.com/php/php_form_url_email.asp
//https://www.w3schools.com/php/php_file_upload.asp
//https://code-boxx.com/simple-csrf-token-php/
$cheie= $_SESSION['token'];
if( !isset ($_POST['hash'] )  || $cheie !== $_POST['hash']  ){
    echo 'Eroare CSRF';die;
}
include_once("connect.php");

$prenume='';
$nume = '';
$email='';
$parola='';
$datanastere ='';
$sex='';
$telefon ='';
$mess_error ='';

//validare
if(isset($_POST['prenume']) && !empty($_POST['prenume']) && strlen($_POST['prenume'])>3){
    $prenume=trim($_POST['prenume']);
}
else{
    $error = true;
    $mess_error.='Prenumele nu a fost introdus!'."<br />";
}
if(isset($_POST['nume']) && !empty($_POST['nume'])){
    $nume= trim($_POST['nume']);
}
else{
    $error = true;
    $mess_error.='Numele nu a fost introdus!'."<br />";
}
if(isset($_POST['email']) && !empty($_POST['email'])){
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $mess_error.='Adresa de email este in format invalid!';
    }
    else{
        $email= trim($_POST['email']);
    }
}
else{
    $error = true;
    $mess_error.='Emailul nu a fost introdus!'."<br />";
}
if(isset($_POST['parola']) && !empty($_POST['parola'])){
    if($_POST['parola']===$_POST['parola2']){
        $parola= sha1(trim($_POST['parola']));
    }
    else{
        $error = true;
        $mess_error.='Parola / Confirmare parola nu a fost introduse corect!'."<br />";
    }
}
else{
    $error = true;
    $mess_error.='Parola nu a fost introdusa corect!'."<br />";
}
if(isset($_POST['datanastere']) && !empty($_POST['datanastere'])){
    $datanastere= date('Y-m-d',strtotime($_POST['datanastere']));
}
else{
    $error = true;
    $mess_error.='Data nastere nu a fost introdusa!'."<br />";
}
if(isset($_POST['sex']) && !empty($_POST['sex'])){
    $arraySex = array('m' ,'f','n');
    if(in_array($_POST['sex'],$arraySex) ){
        $sex= $_POST['sex'];
    }
    else{
        $error = true;
        $mess_error.='Valoarea introdusa nu este corecta!'."<br />";
    }
}
else{
    $error = true;
    $mess_error.='Sex nu a fost introdus!'."<br />";
}
if(isset($_POST['telefon']) && !empty($_POST['telefon'])){
    $telefon= $_POST['telefon'];
}
else{
    $error = true;
    $mess_error.='Telefonul nu a fost introdus!'."<br />";
}


if(isset($_FILES['poza']) && $_FILES['poza']['size']>0)
{
  $path = "uploads/";
  $poza = basename( $_FILES['poza']['name']);
  $path = $path . $poza;
  $check = getimagesize($_FILES["poza"]["tmp_name"]);
    if($check !== false) {
         //echo "Imoginea este de tip- " . $check["mime"] . ".";
        if(move_uploaded_file($_FILES['poza']['tmp_name'], $path)) {
            //ok
        } else{
        $mess_error.= "Poza nu o putut fi salvata! <br>";
        }
    } else {
        $mess_error.= "Fisierul incarcat nu este acceptat!";
    }
}
?>
<?php
    if(isset($error) && $error===true){
        echo '<div class="alert alert-danger" role="alert">'.
        $mess_error.'<br><br><a class="alert-link" href="formular.php"> << Introduceti datele corect!</a>
        </div>';
        //include("formular.php");
    }
    else{
        //salvare date
        $sql = "INSERT INTO utilizatori (prenume, nume, email, parola, data_nastere, sex, telefon, poza)
        VALUES ('".$prenume."', '".$nume."', '".$email."', '".$parola."', '".$datanastere."', '".$sex."', '".$telefon."', '".$poza."')";
        if (mysqli_query($con, $sql)) {
            $mesaj_success = "Datele au fost introduse cu succes!";
            $db_eroare = false;
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($con);
        }
    }
    mysqli_close($con);
?>

<!DOCTYPE html>
 <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    </head>
    <body>

 <?php if(isset($db_eroare) && $db_eroare===false):?>
        <div class="alert alert-success" role="alert">
            <p><?php echo $mesaj_success;?></p>
            <a class="alert-link" href="formular.php"> << Introduceti alti utilizatori</a>
        </div>
        <br /> 
<?php endif;?>  
    </body>
 </html>
