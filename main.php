<?php

declare(strict_types=1);

require __DIR__ . '/models/Wagon.php';
require __DIR__ . '/models/Train.php';

$wagon1 = new Wagon(40);
echo $wagon1->passangers_count();