<?php
require_once('autoload.php');

if (session_status() == PHP_SESSION_NONE) {
    session_start();
    $length = 32;
    $_SESSION['token'] = substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, $length); 
    $hash = $_SESSION['token'];
 }

if(User::is_loggedin() !== true)
{
	// daca nu este logat fac redirect
	User::redirect('listacarti.php');
}
 $carte = new Carti();
 $id = $_GET['id'];
 $res = $carte->read($id);
 $r = mysqli_fetch_assoc($res);
 if(isset($_POST) & !empty($_POST)){
 
    $carte ->setTitlu($_POST['titlu']);
    $carte ->setAutor($_POST['autor']);
    $carte ->setEditura($_POST['editura']);
    $carte ->setAn($_POST['an']);
    $carte ->setPret($_POST['pret']);
    $carte ->setNrPagini($_POST['pagini']);
    $carte ->setTipCarte($_POST['tip_carte']);
    if(isset($_FILES["poza"]) && !empty($_FILES["poza"] &&$_FILES["poza"]['size']>0)){
        $carte->setPoza($_FILES["poza"]);
    }
	$res = $carte->update($id);
	if($res){
	 	echo "Datele au fost actualizate cu succes!";
		header("Location:  {$base}afisare_carti.php");
	}else{
	 	echo "failed to update data";
	}
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
                <h4 class="card-title mt-3 text-center">Editeaza carte</h4>
                <form  action ="<?php echo $base;?>update.php?id= <?php echo $id;?>" method="post" enctype="multipart/form-data"> 
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-address-card"></i> </span>
                        </div>
                        <input name="titlu" class="form-control" placeholder="Titlu" type="text" value="<?php echo $r['titlu'] ?>" required>
                    </div>
                    <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                        </div>
                        <input name="autor" class="form-control" placeholder="Autor" type="text" value="<?php echo $r['autor'] ?>">
                    </div>
                    <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-building"></i></span>
                        </div>
                        <input name="editura" class="form-control" placeholder="Editura" type="text" value="<?php echo $r['editura'] ?>">
                    </div>
                    <!-- form-group// -->
                    <!-- form-group// -->
                  <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-genderless"></i> </span>
                        </div>
                        <select name="tip_carte" class="form-control">
                            <option selected=""> Selecteaza tipul cartii</option>
                            <option <?php if($r['tip_carte'] == 'roman'){ echo "selected";} ?> value="roman">Roman</option>
                            <option <?php if($r['tip_carte'] == 'manual'){ echo "selected";} ?>value="manual">Manual</option>
                            <option <?php if($r['tip_carte'] == 'dictionar'){ echo "selected";} ?>value="dictionar">Dictionar</option>
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
                            <option <?php if($r['an'] == $i) { echo "selected";}?> value="<?php echo $i;?>"><?php echo $i;?></option>
<?php endfor;?>
                        </select>
                    </div>
                    <!-- form-group// -->
                    
                    <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fas fa-calculator"></i> </span>
                        </div>
                        <input name="pagini" class="form-control" placeholder="Numar pagini" type="text" value="<?php echo $r['pagini'] ?>">
                    </div>
                    <!-- form-group// -->
                     <!-- form-group// -->
                     <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fas fa-money-bill-alt"></i> </span>
                        </div>
                        <input name="pret" class="form-control" placeholder="Pret" type="text" value="<?php echo $r['pret'] ?>">
                    </div>
                    <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-file-image"></i> </span>
                        </div>
                        <input name="poza" class="form-control" placeholder="Poza" type="file">
                        <img src="assets/images/<?php echo $r['poza']; ?>" style ="max-width:50px">
                    </div>
                    <input type="hidden" name="hash" value="<?php echo $hash;?>">
                    <!-- form-group// -->
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block"> Editeaza carte </button>
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
