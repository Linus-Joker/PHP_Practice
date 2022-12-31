<?php

/**
 * @param Integer[] $nums1
 * @param Integer[] $nums2
 * @return Integer[]
 */
function intersection($nums1, $nums2)
{
    $arr = [];
    $result = [];

    foreach ($nums1 as $n) {
        if (!in_array($n, $arr)) {
            array_push($arr, $n);
        }
    }

    print_r($arr);

    for ($i = 0; $i < count($nums2); $i++) {
        if (in_array($nums2[$i], $result)) {
            continue;
        }

        if (in_array($nums2[$i], $arr)) {
            array_push($result, $nums2[$i]);
        }
    }

    // print_r($result);
    return $result;
}

$nums1 = [4, 9, 5];
$nums2 = [9, 4, 9, 8, 4];

intersection($nums1, $nums2);
