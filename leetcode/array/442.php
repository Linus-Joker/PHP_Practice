<?php

//是有解出來，不過超過規定的時間複雜度
//之後再研究

/**
 * @param Integer[] $nums
 * @return Integer[]
 */
function findDuplicates($nums)
{
    $result = [];
    for ($i = 0, $j = 1, $k = 1; $i < count($nums) - 2; $j++) {

        if ($j > count($nums) - 1) {
            $i++;
            $k = $i + 1;
            $j = $k;
        }

        if ($nums[$i] == $nums[$j]) {
            array_push($result, $nums[$i]);
        }

        // echo 'i:' . $i . "\n";
        // echo 'j:' . $j . "\n";
    }

    print_r($result);
}


$nums = [4, 3, 2, 7, 8, 2, 3, 1];
findDuplicates($nums);
