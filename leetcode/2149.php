<?php

/**
 * Input: nums = [3,1,-2,-5,2,-4]
 * Output: [3,-2,1,-5,2,-4]
 * 正數和負數交叉排列，順序要按照原本的順序排
 */

/**
 * @param Integer[] $nums
 * @return Integer[]
 */
function rearrangeArray($nums)
{
    $positive_arr = [];
    $negative_arr = [];
    $result = [];

    //先將負數和正數分開
    foreach ($nums as $key => $value) {
        if ($value > 0) {
            array_push($positive_arr, $value);
        } else {
            array_push($negative_arr, $value);
        }
    }

    //最後在合併
    for ($i = 0; $i < count($positive_arr); $i++) {
        array_push($result, $positive_arr[$i]);
        array_push($result, $negative_arr[$i]);
    }

    print_r($result);
}

$nums = [-1, 1];
rearrangeArray($nums);
