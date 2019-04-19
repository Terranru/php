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

function getIndexOfWarmestDay($arr){
    if (empty($arr))
    {
        return null;
    }
    $max = null;
    $maxkey = null;
    foreach ($arr as $key => $value)
    {
        $currentmax = max($value);
        if ($max < $currentmax) {
            $max = $currentmax;
            $maxkey = $key;
        }
    }
    return $maxkey;
}

function buildDefinitionList($definitions)
{
    if (empty($definitions))
    {
        return null;
    }
    $tempdefarr = [];
    foreach ($definitions as $value) {
        $tempdefarr[] = "<dt>{$value[0]}</dt>";
        $tempdefarr[] = "<dd>{$value[1]}</dd>";
    }
    $innerValue = implode('', $tempdefarr);
    $result = "<dl>{$innerValue}</dl>";
    return $result;
}

function makeCensored($sentence, array $censore)
{
    $newsentence = [];
    $words = explode(' ', $sentence);
    foreach ($words as $value) {
        $newsentence[] = (in_array($value, $censore)) ? "$#%!" : $value ;
    }
    $innerValue = implode(' ', $newsentence);
    return $innerValue;
}

function concat($result, $items)
{
    foreach ($items as $item) {
        $result[] = $item;
    }
    return $result;
}

function getSameCount(array $coll1, array $coll2)
{   
    $big_coll = [];
    if (empty($coll1) or empty($coll2))
    {
        return 0;
    }
    $big_coll = array();
    foreach ($coll1 as $item) {
        if (is_array($item)) {
            $item = concat($result, $item);
        }
        if (in_array($item, $coll2, true) and !in_array($item, $big_coll, true)) {
            $r = null;
            $r = array_search('two', $coll2);
            $big_coll[] = $item;
        }
    }
    return count($big_coll);
}

function countUniqChars($text)
{
    // проверяем на пустоту и создадим массив из строки
    $len = strlen($text);
    if ($len === 0) {
        return 0;
    }
    $arraystr = str_split($text);
    //
    $arrnew = [];
    foreach ($arraystr as $value) {
        if (!in_array($value, $arrnew, true)) {
            $arrnew[] = $value;
        }
    }
    return count($arrnew);
}

function bubbleSort($coll)
{
    $change = true;
    $size = sizeof($coll);
    while ($change == true) {
        $change = false;
        for ($i=0; $i < $size - 1; $i++) { 
            if ($coll[$i] > $coll[$i + 1]) {
                $temp = $coll[$i + 1];
                $coll[$i + 1] = $coll[$i];
                $coll[$i] = $temp;
                $change = true;
            }
        }
    }
    return $coll;
}

function checkIfBalanced($expression)
{
    $stack = [];
    for ($i=0; $i < strlen($expression); $i++) { 
        $curr = $expression[$i];
        if ($curr == '(') {
            array_push($stack, $curr);
        }
        elseif ($curr == ')')
        {
            array_pop($stack);
        }
    }
    return count($stack) == 0;
}
// END
