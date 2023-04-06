<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Rezultate</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    
    </head>
    <body>
<?php
include_once("connect.php");
$sql = "SELECT id, prenume, nume , email, data_nastere, sex, telefon,poza, data_adaugare FROM utilizatori";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) :?>
        <div class="container py-3">
<?php //include('meniu.php');?>
            <h2>Rezultatele din baza de date sunt:</h2>    
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Prenume</th>
                        <th>Nume</th>
                        <th>Email</th>
                        <th>Data nastere</th>
                        <th>Sex</th>
                        <th>Telefon</th>
                        <th>Poza</th>
                    </tr>
                </thead>
                <tbody>
<?php while($row = mysqli_fetch_assoc($result)):?>
                    <tr>
                        <td><?php echo htmlentities($row["id"]);?></td>
                        <td><?php echo htmlentities($row["prenume"]);?></td>
                        <td><?php echo htmlentities($row["nume"]);?></td>
                        <td><?php echo htmlentities($row["email"]);?></td>
                        <td><?php echo htmlentities($row["data_nastere"]);?></td>
                        <td><?php echo htmlentities($row["sex"]);?></td>
                        <td><?php echo htmlentities($row["telefon"]);?></td>
                        <td>
                            <img style="max-width:50px;" src="uploads/<?php echo $row["poza"];?>" alt="poza">
                            </td>
                    </tr>
<?php endwhile;?>
                </tbody>
            </table>
<?php else:?>
    echo "0 rezultate";
<?php endif;?>
        </div>
    </body>
</html>
<?php
mysqli_close($con);
 ?>
