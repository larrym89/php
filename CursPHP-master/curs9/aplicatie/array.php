<?php


$masini =[
    ['nume'=>'kya', 'model'=>'Q1','pret'=>10000,'an'=>2018,'culoare'=>'alb', 'poza'=>'img1.jpg','dataadaugare'=>'2021-01-19'],
    ['nume'=>'bmw','model'=>'X4','pret'=>20000,'an'=>2017,'culoare'=>'negru', 'poza'=>'img2.jpg','dataadaugare'=>'2021-01-19'],
    ['nume'=>'Dacia','model'=>'logan','pret'=>7000,'an'=>2019,'culoare'=>'galben', 'poza'=>'img3.jpg','dataadaugare'=>'2021-01-19'],
    ['nume'=>'Dacia','model'=>'logan','pret'=>7000,'an'=>2019,'culoare'=>'galben', 'poza'=>'img3.jpg','dataadaugare'=>'2021-01-19'],
];


usort($masini, function($a, $b) {
    return strcasecmp ($a['nume'],  $b['nume']);
});
