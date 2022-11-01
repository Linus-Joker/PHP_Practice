<?php

/**
 * Input: nums = [3,2,1,5,4], k = 2
 *Output: 3
 *Explanation: The pairs with an absolute difference of 2 are:
 *- [3,2,1,5,4]
 *- [3,2,1,5,4]
 *- [3,2,1,5,4]
 */

/**
 * @param Integer[] $nums
 * @param Integer $k
 * @return Integer
 */
function countKDifference($nums, $k)
{
    $result = 0;

    for ($i = 0; $i < count($nums); $i++) {
        for ($j =  $i + 1; $j < count($nums); $j++) {
            if (abs($nums[$i] - $nums[$j]) === $k) {
                $result++;
            }
        }
    }

    echo $result;
}

$nums = [3, 2, 1, 5, 4];
$k = 2;

countKDifference($nums, $k);
