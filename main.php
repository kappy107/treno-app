
<?php

require_once 'Wagon.php';
require_once 'Train.php';

/* ====== WAGONS ====== */

$wagon1 = new Wagon(40);
$wagon2 = new Wagon(40);
$wagon3 = new Wagon(40);

echo $wagon1->passengers_count() . PHP_EOL; // 0
echo $wagon1->seats_count() . PHP_EOL;      // 40

echo $wagon1->add_passengers(10) . PHP_EOL; // 0
echo $wagon1->passengers_count() . PHP_EOL; // 10

echo $wagon1->add_passengers(55) . PHP_EOL; // 25
echo $wagon1->passengers_count() . PHP_EOL; // 40

$wagon1->remove_passengers(15);
echo $wagon1->passengers_count() . PHP_EOL; // 25

$wagon1->remove_passengers(25);
echo $wagon1->passengers_count() . PHP_EOL; // 0


/* ====== TRAIN ====== */

$train = new Train();
$train->add_wagon($wagon1);
$train->add_wagon($wagon2);
$train->add_wagon($wagon3);

echo $train->passengers_count() . PHP_EOL;  // 0
echo $train->seats_count() . PHP_EOL;       // 120

echo $train->add_passengers(10) . PHP_EOL;  // 0
echo $train->passengers_count() . PHP_EOL;  // 10
print_r($train->passengers_distribution()); // [10, 0, 0]

echo $train->add_passengers(100) . PHP_EOL; // 0
echo $train->passengers_count() . PHP_EOL;  // 110
print_r($train->passengers_distribution()); // [40, 40, 30]

$train->remove_passengers(35);
echo $train->passengers_count() . PHP_EOL;  // 75
print_r($train->passengers_distribution()); // [40, 35, 0]
