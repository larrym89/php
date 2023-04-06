<!DOCTYPE html>
<html lang="en">
<?php include_once('inc/head.php'); ?>

<body>

    <?php include_once('inc/header.php') ?>
    <div class="container">

        <div class="d-flex justify-content-center my-3">
            <h1 class="h1">Dispozitive Mobile</h1>
        </div>

        <?php  include_once('inc/Connection.php'); ?>
        <?php 
        $sql = "SELECT * FROM mobilephones";
        $instance = Connection::getInstance();
        $conn = $instance->getConnection();
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0) :?>
        <table class="table table-hover table-dark">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Producator</th>
                    <th scope="col">Model</th>
                    <th scope="col">Pret</th>
                    <th scope="col">An Productie</th>
                    <th scope="col">Data Adaugare</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php while($row = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <th scope="row"><?php echo $row['id']  ?></th>
                    <td><?php echo ucfirst($row['producator'])  ?></td>
                    <td><?php echo ucfirst($row['model'])  ?></td>
                    <td>$<?php echo $row['pret']  ?></td>
                    <td><?php echo $row['an_productie']  ?></td>
                    <td><?php echo $row['data_adaugare']  ?></td>
                    <td width="100px"><a href="delete.php?id=<?php echo $row['id'];  ?>"> Delete</a></td>
                </tr>
            <?php endwhile; ?>
            </tbody>
        </table>
        <?php endif; ?>        

    </div>

</body>

</html>