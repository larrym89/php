<?php

$offers = [
    ['name' => 'pere', 'price' => 5, 'stock' => 120,
    ],
    ['name' => 'ceapa', 'price' => 51, 'stock' => 10,
    ],
    ['name' => 'mere', 'price' => 44, 'stock' => 50,
    ],
];

$name = 'Larry';

$greeting = 'Hello ' . $name;


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <h1>The candy store</h1>
    <h2>Offers for <?= $name ?></h2>
    <p><?= $greeting ?></p>
    <p><?php echo $offers[0]['name']; ?> -$<?php echo $offers[0]['price']; ?></p>
    <p><?php echo $offers[1]['name']; ?> -$<?php echo $offers[1]['price']; ?></p>
    <p><?php echo $offers[2]['name']; ?> -$<?php echo $offers[2]['price']; ?></p>

</body>

</html>