<?php
require('autoload.php');


if (session_status() == PHP_SESSION_NONE) {
    session_start();
}


if (User::is_loggedin() !== true) {
    User::redirect('login.php');
}
include("includes/header.php");

?>


<div class="container py-4">
    <div class="row justify-content-center py-5">
        <div class="col-4 align-self-center">

            <div class="card shadow">
                <div class="card-body">
                    <div class="card-title p-3 text-center">
                        <h3>Add News</h3>
                    </div>
                    <form class="p-3" method="POST" action="">



                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="News Title" name="title">
                        </div><br>

                        <div class="form-group ">
                            <textarea class="form-control" rows="4" name="content" placeholder="Content"></textarea>
                        </div>
                        <br>

                        <div class="form-group">
                            <select class="form-control" name="category">
                                <?php
                                $category = new Category();
                                $res = $category->read();
                                while ($row = mysqli_fetch_assoc($res)) : ?>
                                    <option><?php echo $row['category_name'] ?></option>
                                <?php endwhile; ?>

                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary my-2">Add</button>



                    </form>
                </div>
            </div>

        </div>



    </div>

</div>
<?php include("includes/footer.php"); ?>
<?php

if (
    isset($_POST['title']) && !empty($_POST['title'])
    && isset($_POST['content']) && !empty($_POST['content'])
    && isset($_POST['category']) && !empty($_POST['category'])
) {

    $post = new Posts();
    $title = $_POST['title'];
    $content = $_POST['content'];
    $category = $_POST['category'];

    $post->setTitle($title);
    $post->setContent($content);
    $post->setCategory($category);

    $post->create();
    User::redirect("index.php");

} else {

}

?>