<?php 
require('autoload.php');
include('includes/functions.php'); 
include('includes/header.php');


?>

<!-- Page content-->
<div class="container">
    <div class="row mt-3">
        <!-- Blog entries-->
        <div class="col-lg-8">
            <!-- Featured blog post-->
            
            <!-- Nested row for non-featured blog posts-->
            <div class="row">
                <?php
                $post = new Posts();
                if(isset($_GET['category'])) {
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

        <!-- Side widgets-->

        <div class="col-lg-4">

            <!-- Search widget-->
            <?php include "includes/search-widget.php"; ?>
           


            <!-- Categories widget-->
            <?php include "includes/categories.php"; ?>



            <!-- Side widget-->
            <?php include "includes/side-widget.php"; ?>
            


        </div>
    </div>
</div>


<?php include("includes/footer.php"); ?>