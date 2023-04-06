<?php

$username = "Ivy";

$greeting = "Hello, " . $username . " . ";

$offer = [
    'item' => 'Chocolate',
    'qty' => 5,
    'price' => 5,
    'discount' => 4,
];

$usual_price = $offer['qty'] * $offer['price'];
$offer_price = $offer['qty'] * $offer['discount'];
$saving = $usual_price - $offer_price;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <h1>The candy store</h1>

    <h2>Multi-buy offer</h2>

    <p><?= $greeting ?></p>

    <p class="sticker">Save $<?= $saving ?></p>

    <p>Buy <?= $offer['qty'] ?> packs of <?= $offer['item'] ?> for $<?= $offer_price ?><br>(usual price $<?= $usual_price ?>)</p>

</body>

</html>