<?php

namespace App\Arrays;

// BEGIN (write your solution here)

function addPrefix($names, $prefix)
{
    for ($i = 0; $i < sizeof($names); $i++) {
        $prefarray[] = $prefix . " " . $names[$i];
      }
    return $prefarray;
}

function swap($names, $index)
{   
    

    if ((array_key_exists($index - 1, $names) and (array_key_exists($index + 1, $names))
    {
        $namesnew = [$names[$index+1], $names[$index], $names[$index-1]];
    }
    else
    {
        $namesnew = $names;
    }
    
    return $namesnew;
}

// END
