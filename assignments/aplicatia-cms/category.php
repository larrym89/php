<?php require('autoload.php'); ?>
<?php include('includes/functions.php'); ?>
<?php include('includes/header.php'); ?>

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
                $category = $_GET['category'];
                $res = $post->read($category);
                while ($row = mysqli_fetch_assoc($res)) : ?>
                    <div class="col-lg-6">
                        <!-- Blog post-->
                        <div class="card mb-4">
                            <!-- <a href="#!"><img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" alt="..." /></a> -->
                            <div class="card-body">
                                <div class="small text-muted"><?php echo format_timestamp($row['posts_created_at']) ?></div>
                                <h2 class="card-title h4"><?php echo ucfirst($row['posts_title']) ?></h2>
                                <p class="card-text"><?php echo ucfirst($row['posts_content']); ?></p>

                                <a class="btn btn-primary" href="article.php?id=<?php echo $row['id']; ?>">Read more →</a>
                            </div>
                        </div>
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