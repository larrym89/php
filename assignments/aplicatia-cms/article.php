<?php require('autoload.php'); ?>
<?php include("includes/header.php"); ?>


<!-- Page content-->
<div class="container">
    <div class="row mt-4">
        <!-- Blog entries-->
        <div class="col-lg-8">

            <div class="card mb-4">
                <a href="#!"><img class="card-img-top" src="https://dummyimage.com/850x350/dee2e6/6c757d.jpg" alt="..." /></a>
                <div class="card-body">
                    <div class="small text-muted">January 1, 2022</div>
                    <h2 class="card-title">Featured Post Title</h2>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>

                    <div class="card my-3">
                        <div class="card-body">

                            <div class="d-flex justify-content-between">
                                <div>Comments are here</div>
                                <div><a href="">Edit</a></div>
                            </div>
                        </div>
                        
                    </div>

                    <div class="card my-3">
                        <div class="card-body">

                            <div class="d-flex justify-content-between">
                                <div>Comments are here</div>
                                <div><a href="">Edit</a></div>
                            </div>
                        </div>
                        
                    </div>


                    

                </div>
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