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
    $namesnew[]='';

    if (array_key_exists($index - 1, $names) and array_key_exists($index + 1, $names))
    {
        $namesnew = [$names[$index+1], $names[$index], $names[$index-1]];
    }
    else
    {
        $namesnew = $names;
    }
    return $namesnew;
}

function isContinuousSequence($arr)
{
    if (sizeof($arr)-1 < 1){
        return FALSE;
    }
    $result = TRUE;
    $firstIndex = $arr[0];
    foreach ($arr as $i => $item){
        if ($item != $firstIndex + $i){
            $result = FALSE;
            return $result;
        }
    }
    return $result;
}

function calculateAverage($temperatures)
{
    if (empty($temperatures)) {
        return null;
    }
    $sum = 0;
    $qnt = count($temperatures);
    foreach ($temperatures as $value) {
        $sum += $value;
    }
    return $sum / $qnt;
}

function findIndex($temperatures, $c){
    foreach ($temperatures as $key => $value) {
        if ($value === $c) {
            return $key;
        }
    }
    return -1;
}

function getSameParity($coll){
    if (empty($coll)) {
        return $coll;
    }
    $newarr1 = [];
    $newarr2 = [];
    foreach ($coll as $value) {
        if ($value % 2 == 0 ) {
            $newarr2[] = $value;
        }
        else{
            $newarr1[] = $value;
        }

    }
    if ($coll[0] % 2 == 0) {
        return $newarr2;
    }
    else {
        return $newarr1;
    }
}
// END
