<?php
require_once('Arrays.php');

use function App\Arrays\calculateAverage;

$temperatures = [37.5, 34, 39.3, 40, 38.7, 41.5];

print_r(calculateAverage($temperatures)); // => 38.5