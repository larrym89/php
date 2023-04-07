<?php
require('autoload.php');
include("includes/header.php");


?>


<div class="container py-4">
    <div class="row justify-content-center py-5">
        <div class="col-4 align-self-center">

            <div class="card shadow">
                <div class="card-body">
                    <div class="card-title p-3 text-center">
                        <h3>Login</h3>
                    </div>
                    <form class="p-3" method="POST" action="<?php echo $base; ?>post_login.php">

                        <?php if (isset($_GET['error'])) { ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $_GET['error']; ?>
                            </div>
                        <?php } ?>

                        <div class="form-group my-2">
                            <label>Username</label>
                            <input type="text" class="form-control" name="username" placeholder="Username" required>
                        </div>

                        <div class="form-group my-2">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>


                        <button type="submit" class="btn btn-primary my-2">Login</button>
                        <a href="register.php" class="link-secondary">Register</a>


                    </form>
                </div>
            </div>

        </div>



    </div>

</div>
<?php include("includes/footer.php"); ?>