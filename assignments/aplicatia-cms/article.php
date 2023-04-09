<?php
require('autoload.php');
include('includes/functions.php');

if (!isset($_SESSION)) {
    session_start();
}

if (User::is_loggedin() !== true) {
    User::redirect('login.php');
}

include('includes/header.php');

?>
<!-- Page content-->
<div class="container">
    <div class="row mt-4">
        <!-- Blog entries-->
        <div class="col-lg-10">

            <?php
            $post = new Posts();
            $id = $_GET['id'];
            $res = $post->read($id);
            while ($row = mysqli_fetch_assoc($res)) : ?>
                <div class="card mb-4 shadow">
                    <div class="card-body">
                        <div class="small text-muted"><?php echo format_timestamp($row['posts_created_at']) ?></div>
                        <h2 class="card-title h4"><?php echo ucfirst($row['posts_title']) ?></h2>
                        <p class="card-text"><?php echo ucfirst($row['posts_content']); ?></p>
                        <div><a href="comments.php?id=<?php echo $row['id']; ?>">Add Comment</a></div>

                    <?php endwhile; ?>

                    <!-- Comments -->
                    <?php
                    $comment = new Comments();
                    $id = $_GET['id'];
                    $res = $comment->read($id);
                    while ($row = mysqli_fetch_assoc($res)) : ?>
                        <div class="card my-3">
                            <div class="card-body">
                                
                                <div class="d-flex justify-content-between">
                                    <div><?php echo $row['content']; ?></div>

                                    <?php if ($_SESSION['username'] == 'admin' || $_SESSION['user_session'] == $row['user_id']) : ?>
                                            <div><a href="edit_comments.php?comment_id=<?php echo $row['id']; ?>">Edit</a>
                                            <a href="delete-comments.php?comment_id=<?php echo $row['id']; ?>">Delete</a>
                                        </div>
                                    
                                            
                                    <?php endif; ?>

                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    <!-- End Comments -->


                    </div>
                </div>


        </div>






        <!-- Side widgets-->
        <div class="col-lg-2">

            <!-- Categories widget-->
            <?php include "includes/categories.php"; ?>


        </div>
    </div>
</div>
</div>
<?php include("includes/footer.php"); ?>