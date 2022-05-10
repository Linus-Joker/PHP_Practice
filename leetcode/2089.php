<?php

/**
 * input: $nums = [1, 2, 5, 2, 3]
 * output: 2
 */


/**
 * @param Integer[] $nums
 * @param Integer $target
 * @return Integer[]
 */
function targetIndices($nums, $target)
{
    $arr = [];
    sort($nums);

    foreach ($nums as $key => $value) {
        if ($value == $target) {
            array_push($arr, $key);
        }
    }

    return $arr;
}

$nums = [1, 2, 5, 2, 3];

targetIndices($nums, 2);

rsort($nums);

print_r($nums);
