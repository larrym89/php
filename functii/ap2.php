<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<?php include "html/header.html"; ?>

    <main>
        <h1 style="color: chocolate;">Bine ati venit!</h1>

        <?php require "book.php"; ?>
        <!-- <?php
        foreach($books as $k=>$b){
            echo $b['title'];
            echo "<br>";
            echo $b['author'];
            echo "<br>";
            echo "<br>";
        }
        ?> -->

<?php foreach($books as $k=>$b) :?>
        <h2>Titlu carte: <?php echo $b['title']; ?></h2>
        <p>Autorul este : <?php echo $b['author']; ?></p>
        <!-- <img src="<?php echo $b['link']; ?>" alt="imagine carte"> -->
<?php endforeach; ?>

    </main>

<?php include "html/footer.html"; ?>

</body>

</html>