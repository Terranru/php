<?php
require_once('Arrays.php');

use function App\Arrays\getIntersectionForSortedArray;

getIntersectionOfSortedArray([10, 11, 24], [10, 13, 14, 18, 24, 30]);
// => [10, 24]