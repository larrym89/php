<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Lista carti generata din PHP</title>
    </head>

    <body>
        <div class="container clearfix">
            <nav class="navbar fixed-top navbar-dark bg-dark">
                <a class="navbar-brand" href="#">Lista de carti</a>
            </nav>
        </div>
<?php include('book.php');?>
        <div style="padding-top: 50px;"></div>
        <div class="container">
            <div class="row">
<?php foreach ($books as $book):?>
                <div class="col-6 col-sm-4 col-md-4 col-lg-4 mt-2 ">
                    <div class="card ">
                        <img class="card-img-top"  style="height:500px" src="<?php echo $book['imageLink'];?>" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $book['title'];?></h4>
                            <h6 class="card-subtitle mb-2 text-muted"><?php echo $book['author'];?>, <?php echo $book['country'];?></h6>
                            <p class="card-text">Language : <?php echo $book['language'];?>; Pages:<?php echo $book['pages'];?>; Year: <?php echo $book['year'];?></p>
                            <a href="<?php echo $book['link'];?>" class="btn btn-primary">Read more</a>
                        </div>
                    </div>
                </div>
<?php endforeach;?>
            </div>
        </div>


    </body>

</html>