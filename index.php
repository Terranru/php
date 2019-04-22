<?php
require_once('Arrays.php');

use function App\Arrays\getIntersectionOfSortedArray;

getIntersectionOfSortedArray([10, 11, 24], [10, 13, 14, 18, 24, 30]);
// => [10, 24]