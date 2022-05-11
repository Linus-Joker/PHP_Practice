<?php

/**
 * Jewels and Stones
 * Input: jewels = "aA", stones = "aAAbbbb"
 * Output: 3
 */

/**
 * @param String $jewels
 * @param String $stones
 * @return Integer
 */
function numJewelsInStones($jewels, $stones)
{
    $sum = 0;

    //split jewels and stones
    $jewels_arr = str_split($jewels);
    $stone_arr = str_split($stones);

    //foreach jewels and stones get equal string
    foreach ($jewels_arr as $key => $jewels_value) {
        foreach ($stone_arr as $index => $stone_value) {

            //if string equal , sum+1
            if ($jewels_value == $stone_value) {
                $sum++;
            }
        }
    }

    echo $sum;
}


$jewels = "aA";
$stones = "aAAbbbb";
numJewelsInStones($jewels, $stones);
