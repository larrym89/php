<?php
require('autoload.php');
include('includes/functions.php');
include("includes/header.php");
?>

<div class="container py-4">
    <div class="row justify-content-center py-5">
        <div class="col-4 align-self-center">
            <div class="card shadow">
                <div class="card-body">
                    <div class="card-title p-3 text-center">
                        <h3>Register</h3>
                    </div>

                    

                    <form action="post_register.php" method="post">
                        
                        <?php if(isset($_GET['error'])){ ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $_GET['error'];?>
                            </div>
                        <?php }?>
                        <?php if(isset($_GET['success'])){ ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo $_GET['success'];?>
                            </div>
                        <?php }?>

                        <div class="form-group my-2">
                            <label>Username</label>
                            <input type="text" class="form-control" name="username" placeholder="Enter email">
                        </div>

                        <div class="form-group my-2">
                            <label>Email address</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter email">
                        </div>

                        <div class="form-group my-2">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>

                        <button type="submit" class="btn btn-primary my-2">Register</button>
                        <a href="login.php" class="link-secondary">Login</a>

                    </form>
                </div>
            </div>

        </div>



    </div>

</div>
<?php include("includes/footer.php"); ?>