<?php
$cheie = $_POST['hash'];

if ($cheie!==$_POST['hash'])
{
    echo 'Eroare CSRF'; die;
}


include_once("connect.php");
$prenume='';
$nume='';
$email='';
$parola='';
$mess_error="";


// validare prenume
if(isset($_POST['prenume']) && !empty($_POST['prenume']) && strlen($_POST['prenume']) >3) {
    $prenume=trim($_POST['prenume']);
}
else {
    $error=true;
    $mess_error.='Prenumele nu a fost introdus!'."<br />";
}
// validare nume
if(isset($_POST['nume']) && !empty($_POST['nume'])) {
    $nume=trim($_POST['nume']);
}
else {
    $error=true;
    $mess_error.='Numele nu a fost introdus!'."<br />";
}
// validare email
if(isset($_POST['email']) && !empty($_POST['email'])) {
    $email=trim($_POST['email']);
}
else {
    $error=true;
    $mess_error.='Emailul nu a fost introdus!'."<br />";
}
// validare parola
if(isset($_POST['parola']) && !empty($_POST['parola'])) {
    $parola=sha1(trim($_POST['parola']));
}
else {
    $error=true;
    $mess_error.='Parola nu a fost introdusa corect!'."<br />";
}
// poza
if(isset($_FILES['poza']) && $_FILES['poza']['size'] > 0) 
{
    $path = "uploads/";
    $poza = basename($_FILES['poza']['name']);
    $path = $path . $poza;
    $check = getimagesize($_FILES['poza']['tmp_name']);
    if($check !== false) {
        if(move_uploaded_file($_FILES['poza']['tmp_name'], $path)){

        } else {
            $mess_error.= "Poza nu a putut fi salvata.<br>";
        }
    } else {
        $mess_error.= "Fisierul incarcar nu este acceptat";
    }
}

if(isset($error) && $error===true){
        echo '<div style="color:red">'.$mess_error.'</div>';
        include("formular.php");
}
else {
    // salvare date
    $sql = "INSERT INTO users (prenume, nume, email, parola, poza) VALUES ('".$prenume."','".$nume."','".$email."','".$parola."','".$poza."')";
    if(mysqli_query($con, $sql)){
        echo "Datele au fost introduse cu succes!";
        $db_eroare = false;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
}
mysqli_close($con);

if(isset($db_eroare) && $db_eroare===false):?>
    <br /><a href="formular.php">Introduceti alti utilizatori</a>
<?php endif;?>