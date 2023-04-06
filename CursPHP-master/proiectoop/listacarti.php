<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'layout/head.php';?>
    <body>
        <div class="container py-4">
<?php include 'layout/meniu.php';?>

<div style="padding-top: 50px;"></div>
        <div class="container">
            <div class="row">
<?php 
require_once 'autoload.php';
$carte = new Carti();
$res = $carte->read();
while ($book= mysqli_fetch_assoc($res)): ?>
                <div class="col-6 col-sm-4 col-md-4 col-lg-4 mt-2 ">
                    <div class="card h-100">
                        <img class="card-img-top" style="max-width:250px;width:100%;margin:auto" src="assets/images/<?php echo $book['poza'];?>" alt="Card image" >
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $book['titlu'];?></h4>
                            <h6 class="card-subtitle mb-2 text-muted"><?php echo $book['autor'];?>, <?php echo $book['editura'];?></h6>
                            <p class="card-text">Tip : <?php echo $book['tip_carte'];?>; Pagini:<?php echo $book['pagini'];?>; <br>An: <?php echo $book['an'];?>; Pret: <?php echo $book['pret'];?></p>
                            <a target="_blank" href="assets/images/<?php echo $book['poza'];?>" class="btn btn-primary">Vezi detalii</a>
                        </div>
                    </div>
                </div>
<?php endwhile;?>
            </div>
        </div>

        </div>
    </body>
</html>