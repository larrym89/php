<?php

$items = 3;
$cost = 5;
$subtotal = $cost * $items;
$tax = ($subtotal / 100) * 24;
$total = $subtotal + $tax;

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <h1>The candy store</h1>
    <h2>Shopping cart</h2>
    <p>Items: <?= $items ?></p>
    <p>Cost per pack: <?= $cost ?></p>
    <p>Subtotal: <?= $subtotal ?></p>
    <p>Tax: <?= $tax ?></p>
    <p>Total: <?= $total ?></p>

</body>

</html>