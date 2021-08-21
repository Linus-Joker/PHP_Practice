<?php

class Solution
{
    /**
     * For example: [1,2,1] becomes [1,2,1,1,2,1]
     *              [1,3,2,1,] becomes [1,3,2,1,1,3,2,1]
     * @param Integer[] $num
     * @return Integer[]
     */
    function getConcatenation($num)
    {
        $newArray = $num;
        $count = count($num);
        for ($i = 0; $i < $count; $i++) {
            array_push($newArray, $num[$i]);
        }

        return $newArray;
    }
}

$num = [1, 3, 2, 1];

$s = new Solution();

print_r($s->getConcatenation($num));
