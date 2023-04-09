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
                        <h3>Edit Comment</h3>
                    </div>
                    <form class="p-3" method="POST" action="">

                    
                        <div class="form-group ">
                            <textarea class="form-control" rows="4" name="comments" value=""></textarea>
                        </div>
                        <br>

                        <button type="submit" class="btn btn-primary my-2">Update</button>

                    </form>
                </div>
            </div>

        </div>



    </div>

</div>
<?php include("includes/footer.php"); ?>

<?php


$comment = new Comments();
if (isset($_GET['comment_id']) && !empty($_GET['comment_id']) && isset($_POST['comments']) && !empty($_POST['comments']) ) {
$comment_id = $_GET['comment_id'];
$content = $_POST['comments'];
$comment->update($comment_id, $content);
User::redirect('index.php');

}

?>