<?php
require_once('Arrays.php');

use function App\Arrays\get;

$cities = ['moscow', 'london', 'berlin', 'porto'];

get($cities, 1); // => london
get($cities, 4); // => null
get($cities, 10, 'paris'); // => paris