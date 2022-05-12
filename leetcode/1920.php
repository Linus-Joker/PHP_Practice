<?php

/**
 * Build Array from Permutation
 * Input: nums = [0,2,1,5,3,4]
 * Output: [0,1,2,4,5,3]
 */

/**
 * @param Integer[] $nums
 * @return Integer[]
 */
function buildArray($nums)
{
    $arr = [];

    //get $nums index push arr 
    foreach ($nums as $key => $value) {
        array_push($arr, $nums[$value]);
    }

    print_r($arr);
}

$nums = [0, 2, 1, 5, 3, 4];
buildArray($nums);


/**
 * 這題看了半天是要取得$num的值當index，給新的數組
 * 題目真的解說真的... 
 */
