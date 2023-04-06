<?php 
// validare HTML5
//https://code-boxx.com/html-form-validation/
if (session_status() == PHP_SESSION_NONE) {
   session_start();
}
$length = 32;
if(!isset($_SESSION['token'])){
    $_SESSION['token'] = substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, $length); 
}
$hash = $_SESSION['token'];
require_once 'autoload.php';
if(User::is_loggedin() !== true)
{
	// daca nu este logat fac redirect
	User::redirect('listacarti.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<?php include ('layout/head.php');?>
<body>
    <div class="container py-4">
<?php include('layout/meniu.php');?>
        <div class="card bg-light">
            <article class="card-body mx-auto" style="max-width: 600px;">
                <h4 class="card-title mt-3 text-center">Adauga carte</h4>
                <form action="<?php echo $base;?>post.php" method="post" enctype="multipart/form-data"> 
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-address-card"></i> </span>
                        </div>
                        <input name="titlu" class="form-control" placeholder="Titlu" type="text" required>
                    </div>
                    <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                        </div>
                        <input name="autor" class="form-control" placeholder="Autor" type="text">
                    </div>
                    <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-building"></i></span>
                        </div>
                        <input name="editura" class="form-control" placeholder="Editura" type="text">
                    </div>
                    <!-- form-group// -->
                    <!-- form-group// -->
                  <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-genderless"></i> </span>
                        </div>
                        <select name="tip_carte" class="form-control">
                            <option selected=""> Selecteaza tipul cartii</option>
                            <option value="roman">Roman</option>
                            <option value="manual">Manual</option>
                            <option value="dictionar">Dictionar</option>
                        </select>
                    </div>
                    <!-- form-group// -->
                     <!-- form-group// -->
                  <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-calendar-alt"></i> </span>
                        </div>
                        <select name="an" class="form-control">
                            <option selected=""> Selecteaza anul publicarii carti</option>
<?php for($i=1900; $i<=2020; $i++):?>
                            <option value="<?php echo $i;?>"><?php echo $i;?></option>
<?php endfor;?>
                        </select>
                    </div>
                    <!-- form-group// -->
                    
                    <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fas fa-calculator"></i> </span>
                        </div>
                        <input name="pagini" class="form-control" placeholder="Numar pagini" type="text">
                    </div>
                    <!-- form-group// -->
                     <!-- form-group// -->
                     <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fas fa-money-bill-alt"></i> </span>
                        </div>
                        <input name="pret" class="form-control" placeholder="Pret" type="text">
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
        <?php include('layout/footer.php');?>
    </div>
    <!--container end.//-->
</body>
</html>