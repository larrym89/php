<?php
// 1
$arrDays = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
print_r($arrDays);

// 2
$heroInfo = array(
    'name' => 'Peter Parker',
    'superHeroName' => 'Spiderman',
    'city' => 'New York',
    'creator' => 'Stan Lee',
);
echo $heroInfo['name'];
echo '<br>';
echo $heroInfo['superHeroName'];

// 3
$basket = [
    ["Mango", "Apple", "Banana", "Orange"],
    ["Burger", "Fries", "Sandwich", "Brownie", "Soda"],
];
for ($i = 0; $i < count($basket); $i++) {
    for ($j = 0; $j < count($basket[$i]); $j++) {
        echo $basket[$i][$j] . PHP_EOL;
    }
}

$basketItems = [
    ["Mango", "Apple", "Banana", "Orange"],
    ["Burger", "Fries", "Sandwich", "Brownie", "Soda"],
];
foreach ($basketItems as $foodItems) {
    foreach ($foodItems as $food) {
        echo $food . PHP_EOL;
    }
}

// 4
$professions = ["Doctor", "Teacher", "Programmer", "Lawyer", "Athlete"];
$subjects =  ["Mathematics", "Computer Programming", "Business English", "Graph Theory"];
foreach ($professions as $profession) {
         echo "The Profession is $profession. " . PHP_EOL;
         if ($profession === 'Teacher') {
                 foreach ($subjects as $name) {
                          echo " $name " . PHP_EOL;
                 }
         }
}
