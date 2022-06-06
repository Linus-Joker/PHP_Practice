<?php

/**
 * Two Sum
 * Input: nums = [2,7,11,15], target = 9
 * Output: [0,1]
 */

/**
 * @param Integer[] $nums
 * @param Integer $target
 * @return Integer[]
 */
function twoSum($nums, $target)
{
    $arr = [];

    for ($i = 0; $i < count($nums); $i++) {
        for ($j = $i + 1; $j < count($nums); $j++) {
            if ($nums[$i] + $nums[$j] == $target) {
                // array_push($arr, $i);
                // array_push($arr, $j);
                $arr = [$i, $j];
                break;
            }
        }
    }

    sort($arr);
    return ($arr);
}

$nums = [3, 2, 3];
$target = 6;

print_r(twoSum($nums, $target));
