<?php
require_once('Arrays.php');

use function App\Arrays\getSameCount;

// print_r(getSameCount([], [])); // => 0
// print_r(getSameCount([1, 10, 3], [10, 100, 35, 1])); // => 2
// print_r(getSameCount([1, 3, 2, 2], [3, 1, 1, 2])); // => 3

$actual2 = getSameCount([1, 2], []);
$actual2 = getSameCount([0], ['one', 'two']);
print_r($actual2);