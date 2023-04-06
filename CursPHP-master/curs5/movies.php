<?php
/*
 Sa se afiseza intr-o pagina informatiile din 
array -ul $movies( movies.json )

a) Folosindu-va de aplicatia de la cursul 4 (lista carti) 
afisati informatia pe 4 coloane, cat mai multe informatii despre film:title,year,image

b) Afisati filmele crescator dupa titlu

c) Afisati filmele mai noi de 2010

d) Afisati doar filmele cu rating >=4

e) colorati titlul filmului dupa valoarea "color"

f) afisati numele si poza actorilor din filmul respectiv
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Lista Filme generata din PHP</title>
    </head>

    <body>
        <div class="container clearfix">
            <nav class="navbar fixed-top navbar-dark bg-dark">
                <a class="navbar-brand" href="#">Lista de filme</a>
            </nav>
        </div>
<?php 
$json = file_get_contents('movies.json');
$movies = json_decode($json,true);
// metoda 1
asort($movies);
// //metoda 2
// function sortare_array($a, $b) { 
//     if( $a['title'] === $b['title'] ) {
//     	return 0;
//     }
//     return ( $a['title'] > $b['title'] ) ? 1 : -1;	
// }  
  
// // Sort the array  
// usort($movies, 'sortare_array'); 
// //metoda 3
// usort( $array, function( $a, $b ) {

//     if( $a['title'] === $b['title'] ) {
//     	return 0;	
//     }
//     return ( $a['title'] < $b['title'] ) ? 1 : -1;					
// } );
?>
        <div style="padding-top: 50px;"></div>
        <div class="container">
            <div class="row">
<?php foreach ($movies as $movie):?>
    <?php if($movie['year']>2010 && $movie['rating']>=4):?>

                <div class="col-6 col-sm-3 col-md-3 col-lg-3 mt-2 ">
                    <div class="card ">
                        <img class="card-img-top" src="<?php echo $movie['image'];?>" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title" style="color: <?php echo $movie['color'];?>"><?php echo $movie['title'];?></h4>
                            <h6 class="card-subtitle mb-2 text-muted">
<?php 
$x ='';
foreach($movie['genre'] as $genre){
    $x .=$genre.', ';
};
?>
                                <?php  echo trim($x,', ');?>
                                
                            </h6>
                            <p class="card-text">
                                Score : <?php echo $movie['score'];?>; 
                                Rating:<?php echo $movie['rating'];?>; 
                                Year: <?php echo $movie['year'];?>

                            </p>
                        </div>
                        <div class="card-footer text-muted">
                            <div class="row ">
<?php foreach ($movie['actor_facets'] as $k=>$actor):?>
    <?php $act = explode('|' ,$actor);?>
    <?php if ($k >3) break;?>   
                                <div class="col col-3">
                                    <img  src="<?php echo $act[0];?>" alt="<?php echo  $act[1];?>" title="<?php echo $act[1];?>">
                                </div>
<?php endforeach;?>

                            </div>
                        </div>
                    </div>
                        
                </div>
    <?php endif;?>
<?php endforeach;?>

            </div>
        </div>


    </body>

</html>
