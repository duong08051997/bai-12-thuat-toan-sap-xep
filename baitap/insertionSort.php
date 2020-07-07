<?php

function insertionSort($arr)
{
    for ($i = 0; $i < count($arr); $i++) {

        $value = $arr[$i];
        $j = $i-1;
        while ($j >=0 && $arr[$j] > $value){
            $arr[$j+1] = $arr[$j];
            $j--;
        }
        $arr[$j + 1] = $value;
    }
    return $arr;
}
$arr = [1,23,132,123,11,12,4,5,6,7,-13,-34,-34-34];
echo implode(',',insertionSort($arr));