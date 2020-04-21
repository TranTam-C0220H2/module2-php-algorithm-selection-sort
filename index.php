<?php
function swapPosition($array, $index1, $index2)
{
    $valueSwap = $array[$index1];
    $array[$index1] = $array[$index2];
    $array[$index2] = $valueSwap;
    return $array;
}
function selectionSort($array)
{
    for ($i = 0; $i < count($array) - 1; $i++) {
        $indexMinNumber = $i;
        for ($j = $i + 1; $j < count($array); $j++) {
            if ($array[$j] < $array[$indexMinNumber]) {
                $indexMinNumber = $j;
            }
        }
        $array = swapPosition($array, $i, $indexMinNumber);
    }
    return $array;
}
$arrayNumber = [1, 9, 4.5, 6.6, 5.7, -4.5];
var_dump(selectionSort($arrayNumber));
