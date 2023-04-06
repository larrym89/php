<!DOCTYPE html>
<html lang="en">
<?php include_once('inc/head.php'); ?>

<body>

    <?php include_once('inc/header.php') ?>
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
            if (isset($_POST['insert'])) {

                if (isset($_POST['producator']) && isset($_POST['model']) && isset($_POST['pret']) && isset($_POST['an-productie'])) {

                    if (!empty($_POST['producator']) && !empty($_POST['model']) && !empty($_POST['pret']) && !empty($_POST['an-productie'])) {

                        $producator = trim($_POST['producator']);
                        $model = trim($_POST['model']);
                        $pret = trim($_POST['pret']);
                        $anProductie = trim($_POST['an-productie']);

                        require("inc/Connection.php");

                        $instance = Connection::getInstance();
                        $conn = $instance->getConnection();

                        $producator = mysqli_real_escape_string($conn, $producator);
                        $model = mysqli_real_escape_string($conn, $model);
                        $pret = mysqli_real_escape_string($conn, $pret);
                        $anProductie = mysqli_real_escape_string($conn, $anProductie);

                        $sql = "INSERT INTO mobilephones (producator, model, pret, an_productie) VALUES('{$producator}', '{$model}', '{$pret}', '{$anProductie}')";


                        if (mysqli_query($conn, $sql) === true) {

                            echo "<div class='alert alert-success' role='alert'>Dispozitiv adaugat cu succes.</div>";
                        } else {

                            echo "<div class='alert alert-danger' role='alert'>Eroare baza de date.</div>";
                        }
                    } else {

                        echo "<div class='alert alert-danger' role='alert'>Toate campurile trebuiesc completate.</div>";
                    }
                } else {

                    echo "<div class='alert alert-danger' role='alert'>Toate campurile sunt obligatorii.</div>";
                }
            }

            ?>
        </div>





    </div>

</body>

</html>