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

        <h1>Remove Album</h1>


            <a href="index.php"><img src="img/album-home.png" alt="search-album" height="70px"></a>
            <a href="insert.php"><img src="img/add-album.png" alt="add-album" height="70px"></a>
            
        </div>

       <?php

        require("inc/connect.php");
        $query = "SELECT * FROM albums";
        $result = mysqli_query($conn, $query);

        if(mysqli_num_rows($result)>0) {

            while($row = mysqli_fetch_assoc($result)) {

                ?>

                <div id="result">

                <a href="inc/removeAlbum.php?id=<?php echo $row['id']; ?>"> <img src="img/del-album.png" alt="remove"> </a>
                <p> <b>Title: <?php echo $row['title']; ?> </b> </p>
                <p> <b>Artist: <?php echo $row['artist']; ?> </b> </p>
                <p> <i>Genre: <?php echo $row['genre']; ?> </p>
                </div>

                <?php

            }

        } else {

            echo "No data found";

        }

       ?>

    </div>

</body>

</html>