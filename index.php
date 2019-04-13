<?php
require_once('Arrays.php');

use function App\Arrays\getSameParity;

getSameParity([]);        // => []
getSameParity([1, 2, 3]); // => [1, 3]
getSameParity([1, 2, 8]); // => [1]
getSameParity([2, 2, 8]); // => [2, 2, 8]