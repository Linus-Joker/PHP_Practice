<?php

/**
 * @param Integer[] $nums
 * @return Integer
 */
function maxSubArray($nums)
{
    $sum = $max = $nums[0];
    foreach ($nums as $key => $value) {
        if ($sum > 0 && $key !== 0) {
            $sum += $value;
        } else {
            $sum = $value;
        }
        if ($sum > $max) {
            $max = $sum;
        }
    }
    echo $max;
}

$nums = [-2, 1, -3, 4, -1, 2, 1, -5, 4, -8, 7];

maxSubArray($nums); //7
