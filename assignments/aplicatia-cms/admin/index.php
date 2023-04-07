<?php require('../autoload.php'); ?>
<?php include('../includes/functions.php'); ?>
<?php include("includes/header.php"); ?>


<!-- Page content-->
<div class="container vh-100">
    <div class="row mt-4">
  

        
        <div class="col-lg-10">
            <div class="row">
                <?php
                $post = new Posts();
                if (isset($_GET['category'])) {
                    $category = $_GET['category'];
                    $res = $post->showCategory();
                } else {
                    $res = $post->read();
                }
                while ($row = mysqli_fetch_assoc($res)) : ?>
                    <div class="col-lg-6">
                        <!-- Blog post-->
                        <?php include("includes/news-post.php"); ?>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>

        <?php include("includes/admin-menu.php"); ?>


    </div>
</div>
<?php include("includes/footer.php"); ?>


