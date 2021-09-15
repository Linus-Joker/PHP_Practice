<?php

/**Input: n = 234
 *Output: 15 
 *Explanation: 
 *Product of digits = 2 * 3 * 4 = 24 
 *Sum of digits = 2 + 3 + 4 = 9 
 *Result = 24 - 9 = 15
 */

/**
 * @param int $n
 * @return int result
 */
function subtractProductAndSum(int $n)
{
    $strN = strval($n);
    $strArray = str_split($strN);

    $product_num = 1;
    $sum_num = 0;

    foreach ($strArray as $key => $value) {
        $product_num = $product_num * intval($value);
        $sum_num = $sum_num  + intval($value);
    }

    $result = $product_num - $sum_num;
    return $result;
}

echo subtractProductAndSum(234);
