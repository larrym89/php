<?php include("includes/header.php"); ?>


<!-- Page content-->
<div class="container">
    <div class="row mt-4">
        <!-- Admin menu-->
        <!-- Admin Actions -->
        <?php include("includes/admin-menu.php"); ?>


        <!-- Admin panel-->
        <div class="col-lg-10">
            <div class="row justify-content-center">
                <div class="col-lg-6 ">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title p-3 text-center">
                                <h3>Add New Article</h3>
                            </div>
                            <form class="p-3">

                                <div class="form-group">
                                    <select class="form-control" name="category">
                                        <option value="" disabled selected>Select Category</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>

                                <div class="form-group my-2">
                                    <input type="text" class="form-control" name="title" placeholder="Article Title">
                                </div>

                                <div class="form-group">
                                    <textarea class="form-control" name="content" rows="3" placeholder="Content"></textarea>
                                </div>



                                <button type="submit" class="btn btn-primary my-2">Post</button>

                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <?php include("includes/footer.php"); ?>