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

        <h1>Add New Album</h1>


            <a href="index.php"><img src="img/album-home.png" alt="search-album" height="70px"></a>
            <a href="remove.php"><img src="img/del-album.png" alt="remove-album" height="70px"></a>
            
            <form action="#" method="POST">
                <label for="">Album Title: </label><br>
                <input type="text" name="title"><br>

                <label for="">Artist: </label><br>
                <input type="text" name="artist"><br>

                <label for="">Genre: </label><br>
                <input type="text" name="genre"><br>

                <input type="submit" value="Insert" name="insert" class="button-1"><br>
            </form>

        </div>

        <div id="message">
            <?php

            if(isset($_POST['insert'])) {

                if(isset($_POST['title']) && isset($_POST['artist']) && isset($_POST['genre'])) {

                    if(!empty($_POST['title']) && !empty($_POST['artist']) && !empty($_POST['genre'])) {

                        $title = trim($_POST['title']);
                        $artist = trim($_POST['artist']);
                        $genre = trim($_POST['genre']);

                        require("inc/connect.php");

                        $title = mysqli_real_escape_string($conn, $title);
                        $artist = mysqli_real_escape_string($conn, $artist);
                        $genre = mysqli_real_escape_string($conn, $genre);

                        $query = "INSERT INTO albums(title, artist, genre) VALUES('{$title}', '{$artist}', '{$genre}')";

                        if(mysqli_query($conn, $query) === true) {

                            echo "New Records Added";

                        } else {

                            echo "Database Error";

                        }

                    } else {

                        echo "All fields must be filled.";

                    }

                } else {

                    echo "All fields are required.";

                }

            }

            ?>
        </div>

    </div>

</body>

</html>