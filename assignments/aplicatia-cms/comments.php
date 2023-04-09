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
                        <h3>Add Comment</h3>
                    </div>
                    <form class="p-3" method="POST" action="post_comments.php?id=<?php echo $_GET['id']; ?>">

                        <?php if (isset($_GET['error'])) { ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $_GET['error']; ?>
                            </div>
                        <?php } ?>


                        <div class="form-group ">
                            <textarea class="form-control" rows="4" name="comments"></textarea>
                        </div>
                        <br>

                        <button type="submit" class="btn btn-primary my-2">Add</button>

                    </form>
                </div>
            </div>

        </div>



    </div>

</div>
<?php include("includes/footer.php"); ?>

