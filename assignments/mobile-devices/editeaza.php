<!DOCTYPE html>
<html lang="en">

<?php include_once("inc/head.php") ?>

<body>
    <?php include_once("inc/menu.php") ?>

    <div class="container">

        <div class="d-flex justify-content-center my-3">
            <h1 class="h1">Editeaza Dispozitiv</h1>
        </div>

        <div class="d-flex justify-content-center">
            <form action="" method="POST">
                <div class="form-group">
                    <label for="">ID</label>
                    <input type="text" class="form-control" name="id" placeholder="ID">
                </div>

                <div class="form-group">
                    <label for="">Producator</label>
                    <input type="text" class="form-control" name="producator" placeholder="Producator">
                </div>

                <div class="form-group">
                    <label for="">Model</label>
                    <input type="text" class="form-control" name="model" placeholder="Model">
                </div>

                <div class="form-group">
                    <label for="">Pret</label>
                    <input type="text" class="form-control" name="pret" placeholder="Pret">
                </div>

                <div class="form-group">
                    <label for="">An Productie</label>
                    <input type="text" class="form-control" name="an-productie" placeholder="An Productie">
                </div><br>

                <input type="submit" class="btn btn-primary" value="Update" name="update">
            </form>
        </div>

        <div class="my-5">
            <?php
            include_once("class/MobilePhone.php");
            $phone = new MobilePhone();
            
            if (isset($_POST) & !empty($_POST)) {
                $phone ->setId($_POST['id']);
                $phone ->setProducator($_POST['producator']);
                $phone ->setModel($_POST['model']);
                $phone ->setPret($_POST['pret']);
                $phone ->setAnProductie($_POST['an-productie']);

                                            
                $res = $phone->update($_POST['id']);
                if ($res) {
                    echo "Datele au fost actualizate cu succes!";
                    header("Location: index.php");
                } else {
                    echo "Eroare update data";
            
                }
            }

            ?>
        </div>

    </div>

</body>

</html>