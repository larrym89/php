<?php

require 'vendor/autoload.php';

use Intervention\Image\ImageManagerStatic as Image;

$image = Image::make('img/candy.png')->resize(300,200)->save('img/candy-2.jpg', 100);

echo '<img src="img/candy-2.jpg" alt="">';