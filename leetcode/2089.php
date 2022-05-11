<?php

/**
 * Find Target Indices After Sorting Array
 * 排序後找到目標索引
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

    print_r($arr);
}

$nums = [1, 2, 5, 2, 3];

targetIndices($nums, 2);

/**
 * Solution:
 * 將數組重新排序後，依序取出數值和目標比對
 * 因為可能會有複數相同的情況
 * 所以存入數組
 */
