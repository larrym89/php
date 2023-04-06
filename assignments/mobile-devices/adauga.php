<!DOCTYPE html>
<html lang="en">

<?php include_once("inc/head.php") ?>

<body>
    <?php include_once("inc/menu.php") ?>

    <div class="container">
        <div class="d-flex justify-content-center my-3">
            <h1 class="h1">Adauga Dispozitiv</h1>
        </div>

        <div class="d-flex justify-content-center">

            <form action="" method="POST">

                <div class="form-group">
                    <label for="">Producator</label>
                    <input type="text" class="form-control" placeholder="Producator" name="producator">
                </div>

                <div class="form-group">
                    <label for="">Model</label>
                    <input type="text" class="form-control" placeholder="Model" name="model">
                </div>

                <div class="form-group">
                    <label for="">Pret</label>
                    <input type="text" class="form-control" placeholder="Pret" name="pret">
                </div>

                <div class="form-group">
                    <label for="">An Productie</label>
                    <input type="text" class="form-control" placeholder="An Productie" name="an-productie">
                </div><br>

                <input type="submit" class="btn btn-primary" value="Trimite" name="insert">

            </form>

        </div>

        <div class="my-5">
            <?php
            include_once("class/MobilePhone.php");
            if (isset($_POST) & !empty($_POST)) {
                $phone = new MobilePhone();
                $phone ->setProducator($_POST['producator']);
                $phone ->setModel($_POST['model']);
                $phone ->setPret($_POST['pret']);
                $phone ->setAnProductie($_POST['an-productie']);
                            
                $res = $phone->create();
                if ($res) {
                    echo "Datele au fost introduse cu succes!";
                    header("Location: index.php");
                } else {
                    echo "Eroare insert data";
            
                }
            }

            ?>
        </div>

    </div>

</body>

</html>