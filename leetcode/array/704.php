<?php

//use O(log n) by binary search

/**
 * @param Integer[] $nums
 * @param Integer $target
 * @return Integer
 */
function search($nums, $target)
{
    $left = 0;
    $right = count($nums) - 1;
    $middle = intval(($left + $right) / 2);
    // $middle = 2;
    // echo $middle;

    $out = -1;
    while (true) {

        if ($left > $right) {
            break;
        }

        // echo $nums[$middle];

        if ($nums[$middle] == $target) {
            $out = $middle;
            break;
        } elseif ($target > $nums[$middle]) {
            $left = $middle + 1;
        } else {
            $right = $middle - 1;
        }

        $middle = intval(($left + $right) / 2);
    }

    echo $out;
}


$nums = [-1, 0, 3, 5, 9, 12];
$target = 2;
search($nums, $target);
