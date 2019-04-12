<?php
require_once('Arrays.php');

use function App\Arrays\findIndex;

$temperatures = [37.5, 34, 39.3, 40, 38.7, 41.5, 40];

findIndex($temperatures, 34); // => 1
findIndex($temperatures, 40); // => 3
findIndex($temperatures, 3);  // => -1