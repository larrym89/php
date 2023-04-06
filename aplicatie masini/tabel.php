<!DOCTYPE html>
<html lang="en">

<?php include_once('head.php'); ?>

<body>

    <div class="container">
        <h1 class="h1">Lista masini</h1><br>

        <?php // include_once('array.php'); ?>
        <?php  include_once('connect.php'); ?>
        <?php
        $sql = "SELECT * FROM masini WHERE an>='2017'";
        $result = mysqli_query($con, $sql);
        if (mysqli_num_rows($result) > 0) :?>
        
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">Nume</th>
                    <th scope="col">Model</th>
                    <th scope="col">Pret</th>
                    <th scope="col">An</th>
                    <th scope="col">Culoare</th>
                    <th scope="col">Poza</th>
                    <th scope="col">Data adaugare</th>
                </tr>
            </thead>
            <tbody>
            <?php while($masina = mysqli_fetch_assoc($result)):?>

                    <?php if ($masina['an'] >=2000): ?>
                <tr>
                    <td><?php echo ucfirst($masina['nume']) ?></td>
                    <td><?php echo ucfirst($masina['model']) ?></td>
                    <td><?php echo $masina['pret'] ?></td>
                    <td><?php echo $masina['an'] ?></td>
                    <td><?php echo $masina['culoare'] ?></td>
                    <td><img src="<?php echo $masina['poza'] ?> " alt="" height="70"></td>
                    <td><?php echo $masina['dataAdaugare'] ?></td>
                </tr>
                <?php endif;?>
                <?php endwhile; ?>

            </tbody>
        </table>
        <?php endif;?>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>