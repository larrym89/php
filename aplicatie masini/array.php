<?php

$masini = [
    ['nume'=>'kAudi', 'model'=>'q1', 'pret'=>'10000', 'an'=>2019, 'culoare'=>'alb', 'poza'=>'img1.jpg', 'dataAdaugare'=>'2011-01-02'],
    ['nume'=>'BMW', 'model'=>'x3', 'pret'=>'20000', 'an'=>2019, 'culoare'=>'rosu', 'poza'=>'img2.jpg', 'dataAdaugare'=>'2012-01-02'],    
    ['nume'=>'dacia', 'model'=>'logan', 'pret'=>'2000', 'an'=>2018, 'culoare'=>'galben', 'poza'=>'img3.jpg', 'dataAdaugare'=>'2012-01-02'],    
    ['nume'=>'adacia', 'model'=>'logan', 'pret'=>'2000', 'an'=>2018, 'culoare'=>'galben', 'poza'=>'img3.jpg', 'dataAdaugare'=>'2012-01-02'],    
];


usort($masini, function($a, $b){
    return strcasecmp($a['nume'], $b['nume']);
});