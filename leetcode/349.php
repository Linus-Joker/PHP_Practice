<?php

$nums1 = [4, 9, 5];
$nums2 = [9, 4, 9, 8, 4];

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

intersection($nums1, $nums2);


/**
 * @param Integer[] $nums1
 * @param Integer[] $nums2
 * @return Integer[]
 */
function otherSolution($nums1, $nums2)
{
    if (count($nums1) == 0 || count($nums2) == 0) {
        return [];
    }
    $counts = [];
    $res = [];
    foreach ($nums1 as $num) {
        $counts[$num] = 1;
    }
    foreach ($nums2 as $num) {
        if (isset($counts[$num])) {
            $res[] = $num;
        }
        unset($counts[$num]);
    }

    return $res;
}

otherSolution($nums1, $nums2);


//ps.上面是我的，下面是網路上的
