<?php

$name = 'Larry';
$price = 5;

$nutrition = [
    'fat' => 16,
    'sugar' => 30,
    'salt' => 6.2,
];

$best_sellers = ['ciocolata', 'mints', 'fudge', 'coffe'];

$best_sellers[3] = 'acadele';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <h1>The candy store</h1>
    <h2>Welcome <?php echo $name; ?></h2>
    <p>The cost of your candy is $<?php echo $price; ?> per pack.</p>

    <p>Fat: <?php echo $nutrition['fat']; ?>%</p>
    <p>Sugar: <?php echo $nutrition['sugar']; ?>%</p>
    <p>Salt: <?php echo $nutrition['salt']; ?>%</p>

    <h2>Best sellers</h2>
    <ul>
        <li><?php echo $best_sellers[0]; ?></li>
        <li><?php echo $best_sellers[1]; ?></li>
        <li><?php echo $best_sellers[2]; ?></li>
        <li><?php echo $best_sellers[3]; ?></li>
    </ul>

</body>

</html>