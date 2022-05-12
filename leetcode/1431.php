<?php

/**
 * Kids With the Greatest Number of Candies
 * candies = [2,3,5,1,3], extraCandies = 3
 */

/**
 * @param Integer[] $candies
 * @param Integer $extraCandies
 * @return Boolean[]
 */
function kidsWithCandies($candies, $extraCandies)
{
    $arr = [];
    $max_candy_num = max($candies);

    foreach ($candies as $key => $candy_value) {
        $total = $candy_value + $extraCandies;

        if ($total < $max_candy_num) {
            array_push($arr, false);
        } else {
            array_push($arr, true);
        }
    }

    var_dump($arr);
}

$candies = [2, 3, 5, 1, 3];
$extraCandies = 3;

kidsWithCandies($candies, $extraCandies);


/**
 * 這題放字串類型的 boolean(true or false)，leetcode會報錯
 * 取得小孩的最大糖果，將額外糖果 + 小孩的糖果之後 
 * 會不會超過原本的最大糖果數 
 */
