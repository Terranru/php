<?php
require_once('Arrays.php');

use function App\Arrays\bubbleSort;


bubbleSort([]); // => []
bubbleSort([3, 10, 4, 3]); // => [3, 3, 4, 10]

