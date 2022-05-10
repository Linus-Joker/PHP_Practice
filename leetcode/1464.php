<?php
//這題看了半天原來是要最大的2個值減1後相乘
//所以由大到小排序後找出第0項和第1項的值

/**
 * @param Integer[] $nums
 * @return Integer
 */

function maxProduct($nums)
{
    rsort($nums);
    return ($nums[0] - 1) * ($nums[1] - 1);
}

$nums = [10, 2, 5, 2];
maxProduct($nums); //36
