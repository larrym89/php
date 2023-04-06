<?php include("includes/header.php"); ?>
<div class="container py-4">
    <div class="row justify-content-center py-5">
        <div class="col-4 align-self-center">
            
            <div class="card">
                <div class="card-body">
                    <div class="card-title p-3 text-center">
                        <h3>Login</h3>
                    </div>
                    <form class="p-3">
                        <div class="form-group my-2">
                            <label>Email address</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter email">
                        </div>

                        <div class="form-group my-2">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>

                        <button type="submit" class="btn btn-primary my-2">Login</button>

                    </form>
                </div>
            </div>

        </div>



    </div>

</div>
<?php include("includes/footer.php"); ?>