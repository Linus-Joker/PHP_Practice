<?php

/**
 * @param Integer[] $nums
 * @return Integer
 */
function minPairSum($nums)
{
    $start = 0;
    $end = count($nums) - 1;
    $min = count($nums) / 2;
    $temp_arr = [];
    $temp_result = 0;
    sort($nums);

    for ($i = 0; $i < $min; $i++) {
        $temp_result = $nums[$start] + $nums[$end];
        $temp_arr[] = $temp_result;

        $start = $start + 1;
        $end = $end - 1;
    }

    $result = max($temp_arr);
    echo $result;
}

$nums =  [3, 5, 4, 2, 4, 6];
minPairSum($nums);
