<?php require('autoload.php'); ?>
<?php include("includes/header.php"); ?>
<?php include('includes/functions.php'); ?>



<!-- Page content-->
<div class="container">
    <div class="row mt-4">
        <!-- Blog entries-->
        <div class="col-lg-8">

            <?php
            $post = new Posts();
            $id = $_GET['id'];
            $res = $post->read($id);
            while ($row = mysqli_fetch_assoc($res)) : ?>
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="small text-muted"><?php echo format_timestamp($row['posts_created_at']) ?></div>
                        <h2 class="card-title h4"><?php echo ucfirst($row['posts_title']) ?></h2>
                        <p class="card-text"><?php echo ucfirst($row['posts_content']); ?></p>

                        <!-- Comments -->
                        <?php
                        $comment = new Comments();
                        $id = $_GET['id'];
                        $res = $comment->read($id);
                        while ($row = mysqli_fetch_assoc($res)) :?>                        
                        <div class="card my-3">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div><?php echo $row['content']; ?></div>
                                    <div><a href="">Edit</a></div>
                                </div>
                            </div>
                        </div>
                        <?php endwhile;?>
                        <!-- End Comments -->


                    </div>
                </div>
            <?php endwhile; ?>
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
</div>
<?php include("includes/footer.php"); ?>