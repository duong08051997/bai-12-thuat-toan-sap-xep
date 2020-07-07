<?php

function selectionSort($arr)
{
    $temp = 0;
    $min = 0;
    for ($i = 0; $i < count($arr); $i++) {
        $min = $i;
        for ($j = $i+1; $j < count($arr); $j++) {
            if ($arr[$j] < $arr[$min]) {
                $min = $j;
            }
        }
        $temp = $arr[$i];
        $arr[$i] =$arr[$min];
        $arr[$min] = $temp;
    }
    return $arr;
}
$arr = [1,2,45,52,56,-1,14,-4,5,-25,23,4.4];
echo implode(',',selectionSort($arr));