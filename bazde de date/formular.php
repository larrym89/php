<?php 
// Generare token
if (session_status() == PHP_SESSION_NONE) {
    session_start();
    $length = 32;
    $_SESSION['token'] = substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, $length);
    $hash = $_SESSION['token'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form action="post.php" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend><strong>Formular de inregistrare</strong></legend>
            <label class="prenume" id="prenume-label">
                <strong>Prenume</strong><br>
                <input type="text" name="prenume" id="prenume"  />
            </label>
            <br>
            <label class="nume" id="nume-label">
                <strong>Nume</strong><br>
                <input type="text" name="nume" id="nume"   />
            </label>
            <br>
            <!-- <label class="telefon" id="telefon-label">
                <strong>Telefon</strong><br>
                <input type="tel" name="nume" id="nume" pattern="0[0-9]{9}" maxlength="10"/>
            </label>
            <br> -->
            <label class="email" id="email-label">
                <strong>Email</strong><br>
                <input type="email" name="email" id="email" >
            </label>
            <br>
            <label class="parola" id="parola-label">
                <strong>Parola</strong><br>
                <input type="password" name="parola" id="parola" >
            </label>
            <br>
            <label class="poza" id="poza-label">
                <strong>Poza</strong><br>
                <input type="file" name="poza" id="poza" >
            </label>
            <br>

            <label class="submit">
                <input type="submit" value="Trimite" name="submit">
            <input type="reset" value="Reset" >

            </label>
            <input type="hidden" name="hash" value="<?php echo $hash;?>" />
        </fieldset>
    </form>
</body>
</html>