<?php
require_once('Arrays.php');

use function App\Arrays\bubbleSort;


print_r(bubbleSort([])); // => []
print_r(bubbleSort([3, 10, 4, 3])); // => [3, 3, 4, 10]

