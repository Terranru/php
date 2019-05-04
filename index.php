<?php
require_once('Arrays.php');

use function App\Arrays\getComposerFileData;

print_r(getComposerFileData());

/* $my_array = ['foo' => 'bar','bar' => 'foo'];
print_r($my_array['bar']); */

$json_string = '{
    "autoload": {
      "files": [
        "src/Arrays.php"
      ]
    },
    "config": {
      "vendor-dir": "/composer/vendor"
    }
  }';
  $obj = json_decode($json_string, TRUE); // Set second argument as TRUE
print_r($obj);