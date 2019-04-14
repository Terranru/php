<?php
require_once('Arrays.php');

use function App\Arrays\makeCensored;

$sentence = 'When you play the game of thrones, you win or you die';
print_r(makeCensored($sentence, ['die', 'play']));
// => When you $#%! the game of thrones, you win or you $#%!

$sentence2 = 'chicken chicken? chicken! chicken';
print_r(makeCensored($sentence2, ['?', 'chicken']));
// => '$#%! chicken? chicken! $#%!';