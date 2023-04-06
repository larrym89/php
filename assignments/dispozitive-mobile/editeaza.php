<!DOCTYPE html>
<html lang="en">
<?php include_once('inc/head.php'); ?>

<body>

    <?php include_once('inc/header.php') ?>
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
            if (isset($_POST['update'])) {

                if (isset($_POST['id']) && isset($_POST['producator']) && isset($_POST['model']) && isset($_POST['pret']) && isset($_POST['an-productie'])) {

                    if (!empty($_POST['id']) && !empty($_POST['producator']) && !empty($_POST['model']) && !empty($_POST['pret']) && !empty($_POST['an-productie'])) {

                        $id = trim($_POST['id']);
                        $producator = trim($_POST['producator']);
                        $model = trim($_POST['model']);
                        $pret = trim($_POST['pret']);
                        $anProductie = trim($_POST['an-productie']);

                        require("inc/Connection.php");

                        $instance = Connection::getInstance();
                        $conn = $instance->getConnection();

                        $id = mysqli_real_escape_string($conn, $id);
                        $producator = mysqli_real_escape_string($conn, $producator);
                        $model = mysqli_real_escape_string($conn, $model);
                        $pret = mysqli_real_escape_string($conn, $pret);
                        $anProductie = mysqli_real_escape_string($conn, $anProductie);

                        $sql = "UPDATE mobilephones SET producator='{$producator}', model='{$model}', pret='{$pret}', an_productie='{$anProductie}' WHERE id={$id}";


                        if (mysqli_query($conn, $sql) === true) {

                            echo "<div class='alert alert-success' role='alert'>Dispozitiv editat cu succes.</div>";
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