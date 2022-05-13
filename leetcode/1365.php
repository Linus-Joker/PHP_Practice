<?php

/**
 * How Many Numbers Are Smaller Than the Current Number
 * Input: nums = [8,1,2,2,3]
 * Output: [4,0,1,1,3]
 */

/**
 * @param Integer[] $nums
 * @return Integer[]
 */
function smallerNumbersThanCurrent($nums)
{
    $num_quantity = count($nums);
    $arr = [];

    for ($i = 0; $i < $num_quantity; $i++) {
        $temporary_num = 0;
        //當前的號碼 > 後面的號碼就+1 
        for ($j = 0; $j < $num_quantity; $j++) {
            if ($nums[$i] > $nums[$j]) {
                $temporary_num++;
            }
        }
        array_push($arr, $temporary_num);
    }

    print_r($arr);
}


$nums = [6, 5, 4, 8];
smallerNumbersThanCurrent($nums);


//個人覺得這個解答是不是離題了，雖然也可以解答就是了
// $sorted = $nums;
// sort($sorted);
// print_r($sorted);

// for ($i = 0; $i < count($nums); $i++) {
//     $nums[$i] = array_search($nums[$i], $sorted);
// }

// print_r($nums);
