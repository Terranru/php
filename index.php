<?php
require_once('Arrays.php');

use function App\Arrays\checkIfBalanced;

checkIfBalanced('(5 + 6) * (7 + 8)/(4 + 3)'); // => true
checkIfBalanced('(4 + 3))'); // => false