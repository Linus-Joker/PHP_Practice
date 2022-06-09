<?php

/**
 * nums = [9,12,5,10,14,3,10], pivot = 10
 * 比目標小的放左邊，大的放右邊
 * 排序要按照原本的順序排
 * 
 */

/**
 * @param Integer[] $nums
 * @param Integer $pivot
 * @return Integer[]
 */
function pivotArray($nums, $pivot)
{
    $small_arr = [];
    $pivot_arr = [];
    $big_arr = [];

    //先比較後放在不同的array
    foreach ($nums as $key => $value) {
        if ($value > $pivot) {
            array_push($big_arr, $value);
        } elseif ($value < $pivot) {
            array_push($small_arr, $value);
        } else {
            array_push($pivot_arr, $value);
        }
    }

    //分完後再合併起來
    $result = array_merge($small_arr, $pivot_arr, $big_arr);

    print_r($result);
}

$nums = [-3, 4, 3, 2];
$pivot = 2;

pivotArray($nums, $pivot);
