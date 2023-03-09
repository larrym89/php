<?php
$cheie= "cheie_secreta_generata_pe_sesiune";
if($cheie!==$_POST['hash'] ){
    echo 'Eroare CSRF';die;
}
include_once("connect.php");
 // echo "<pre>";
 // print_r($_POST);
$prenume='';
$nume = '';
$parola='';
$email='';
$zinastere ='';
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
    $email= trim($_POST['email']);
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
    $mess_error.='Parola nu a fost introduse corect!'."<br />";
}
if(isset($_POST['zinastere']) && !empty($_POST['zinastere'])){
    $zinastere= date('Y-m-d',strtotime($_POST['zinastere']));
}
else{
    $error = true;
    $mess_error.='Data nastere nu a fost introdusa!'."<br />";
}
if(isset($_POST['sex']) && !empty($_POST['sex'])){
    $arraySex = array('m' ,'f','n','');
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
?>
<?php
    if(isset($error) && $error===true){
        echo '<div style="color:red;">'.$mess_error.'</div>';
        include("formular.php");
    }
    else{
        //salvare date
        $sql = "INSERT INTO utilizatori (prenume, nume, email, parola, zinastere, sex, telefon)
        VALUES ('".$prenume."', '".$nume."', '".$email."', '".$parola."', '".$zinastere."', '".$sex."', '".$telefon."')";
        if (mysqli_query($con, $sql)) {
            echo "Datele au fost introduse cu succes!";
            $db_eroare = false;
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($con);
        }
    }
    mysqli_close($con);

 ?>
 <?php if(isset($db_eroare) && $db_eroare===false):?>
    <br /> <a href="formular.php"> << Introduceti alti utilizatori</a>
<?php endif;?>