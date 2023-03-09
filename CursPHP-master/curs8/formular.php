<?php 
// error_reporting(0);
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formular curs 8</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
</head>
<body>

    <div class="container py-4">
<?php //include('meniu.php');?>
        <div class="card bg-light">
            <article class="card-body mx-auto" style="max-width: 600px;">
                <h4 class="card-title mt-3 text-center">Creaza cont nou</h4>

                <form action="http://localhost/2020_cursphp/curs8/post.php" method="post" enctype="multipart/form-data">
                    
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                        </div>
                        <input name="prenume" class="form-control" placeholder="Preume" type="text" required>
                    </div>
                    <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                        </div>
                        <input name="nume" class="form-control" placeholder="Nume" type="text" required>
                    </div>
                    <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                        </div>
                        <input name="email" class="form-control" placeholder="Adresa de email" type="email" required>
                    </div>
                    <!-- form-group end.// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                        </div>
                        <input name='parola' class="form-control" placeholder="Parola" type="password">
                    </div>
                    <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                        </div>
                        <input name='parola2' class="form-control" placeholder="Confirmare parola" type="password">
                    </div>
                    <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-calendar"></i> </span>
                        </div>
                        <input name='datanastere' class="form-control" placeholder="Data de nastere" type="date" >
                    </div>
                  <!-- form-group// -->
                  <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-genderless"></i> </span>
                        </div>
                        <select name="sex" class="form-control">
                            <option selected=""> Selecteaza genul</option>
                            <option value="m">Masculin</option>
                            <option value="f">Feminin</option>
                            <option value="n">Altul</option>
                        </select>
                    </div>
                    <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                        </div>
                        <input name="telefon" class="form-control" placeholder="Telefon" type="tel" pattern="07[0-9]{8}" maxlength="10" required>
                    </div>
                    <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-file-image"></i> </span>
                        </div>
                        <input name="poza" class="form-control" placeholder="Poza" type="file">
                    </div>
                    <input type="hidden" name="hash" value="<?php echo $hash;?>">
                    <!-- form-group// -->
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block"> Trimite datele </button>
                    </div>
                    
                </form>
            </article>
        </div>
        <!-- card.// -->

    </div>
    <!--container end.//-->

</body>
</html>