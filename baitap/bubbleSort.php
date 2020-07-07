<?php

function bubbleSort($arr)
{
    $temp = 0;
    for ($i = 0; $i < count($arr); $i++) {
        for ($j = $i - 1; $j >= 0; $j--) {
            if ($arr[$j ] > $arr[$j+1]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
    return $arr;
}
$arr = [1,34,12,1,2,56,-1,1,-345,-55];
echo implode(',', bubbleSort($arr));