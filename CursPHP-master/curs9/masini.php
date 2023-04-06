<?php

include_once("connect.php");
 // echo "<pre>";
 // print_r($_POST);

$nume = '';
$model='';
$pret='';
$an ='';
$culoare='';
$poza ='';
$mess_error ='';

//validare
if(isset($_POST['nume']) && !empty($_POST['nume']) && strlen($_POST['nume'])>3){
    $nume=trim($_POST['nume']);
}
else{
    $error = true;
    $mess_error.='Numele nu a fost introdus!'."<br />";
}
if(isset($_POST['model']) && !empty($_POST['model'])){
    $model= trim($_POST['model']);
}
else{
    $error = true;
    $mess_error.='Modelul nu a fost introdus!'."<br />";
}
if(isset($_POST['an']) && !empty($_POST['an'])){
    $an= trim($_POST['an']);
}
else{
    $error = true;
    $mess_error.='Anul nu a fost introdus!'."<br />";
}

if(isset($_POST['culoare']) && !empty($_POST['culoare'])){
    $culoare= $_POST['culoare'];
}
else{
    $error = true;
    $mess_error.='Culoarea nu a fost introdusa!'."<br />";
}

// $target_dir = "masini/";
// if (!file_exists($target_dir)) {
//     mkdir($target_dir, 0777, true);
// }
$target_dir ='';
$target_file = $target_dir . basename($_FILES["poza"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["poza"]["tmp_name"]);
    if($check !== false) {
        //echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["poza"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["poza"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["poza"]["name"]). " has been uploaded.";
        $poza = $_FILES["poza"]["name"];
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}



?>
<?php
    if(isset($error) && $error===true){
        echo '<div style="color:red;">'.$mess_error.'</div>';
        include("formular.php");
    }
    else{
        //salvare date
        $sql = "INSERT INTO masini (nume, model, pret, an, culoare, poza)
        VALUES ('".$nume."', '".$model."', '".$pret."', '".$an."', '".$culoare."', '".$poza."')";
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
    <br /> <a href="tabel.php"> << Introduceti alta masina</a>
<?php endif;?>
