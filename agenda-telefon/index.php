<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Albume Audio</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

    <div id="wrap">
        <div id="search">

            <h1>Audio Album Library</h1>

            <a href="insert.php"><img src="img/add-album.png" alt="add-album" height="70px"></a>
            <a href="remove.php"><img src="img/del-album.png" alt="remove-album" height="70px"></a>
            
            <form action="#" method="GET">
                <input type="text" name="criteria" placeholder="Search Albums">
                <input type="submit" value="Search" class="button-1"><br>
            </form>

        </div>

        <?php

            include("inc/getResults.php");

        ?>

    </div>

</body>

</html>