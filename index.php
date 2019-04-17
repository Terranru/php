<?php
require_once('Arrays.php');

use function App\Arrays\countUniqChars;


$text1 = 'yyab';
countUniqChars($text1); // => 3

$text2 = 'You know nothing Jon Snow';
countUniqChars($text2); // => 13

$text3 = '';
countUniqChars($text3); // => 0

