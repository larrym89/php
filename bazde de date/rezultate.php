<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    include_once("connect.php");
    $r = mysqli_query($con, "SELECT * FROM users");?>
    <ul>
    <?php while($rw = mysqli_fetch_row($r)) {
        echo "<li>";
        echo $rw[0]." ";
        echo $rw[1]." " ;
        echo $rw[2]." " ;
        echo $rw[3]." " ;
        echo "<img src='uploads/".$rw[6]."' style='max-width:50px'>";
        echo "</li>";
    } ?>
    </ul>
    <?php mysqli_close($con); ?>

</body>
</html>