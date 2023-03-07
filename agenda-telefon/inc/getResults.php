<?php 

require("connect.php");

if(isset($_GET['criteria'])) {

    if(!empty($_GET['criteria'])) {

        $criteria = trim($_GET['criteria']);
        $criteria = mysqli_real_escape_string($conn, $criteria);
        $query = "SELECT * FROM albums WHERE title LIKE '%{$criteria}%' OR artist LIKE '%{$criteria}%'";

        $result = mysqli_query($conn, $query);

                if(mysqli_num_rows($result)>0) {

                    while($row = mysqli_fetch_assoc($result)) {

                        ?>

                        <div id="result">
                            <img src="img/album-icon.png" alt="album">
                            <p> <b>Title: <?php echo $row['title']; ?> </b> </p>
                            <p> <b>Artist: <?php echo $row['artist']; ?> </b> </p>
                            <p> <i>Genre: <?php echo $row['genre']; ?> </i> </p>
                        </div>

                        <?php

                    }

                    echo "Number of results: " . mysqli_num_rows($result);
                } else {

                    echo "No results found.";

                }

    } else {

        echo "Search criteria is empty.";

    }

}

?>