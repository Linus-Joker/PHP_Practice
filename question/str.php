<?php

$txt = 12345;

/**
 * 1.計算一連串數字(每個數字為0~9)輸入,
 * ex.輸入12345 ，輸出15(1+2+3+4+5=15)
 */
function cal_num($num)
{
    //拆解字串
    $new_num_arr = str_split($num);

    //逐一計算
    $total = 0;
    foreach ($new_num_arr as $key => $value) {
        $total = $total + $value;
    }

    echo "字串相加總數= " . $total . "\n";
}

cal_num($txt);

/**
 * 2.翻轉字串
 * 用內建函式轉
 * 自己寫函式轉
 */

echo "反轉字串:" . strrev($txt) . "\n";

/**
 * 分割字串後放入數組
 * 要用print_r()顯示
 */
print_r(explode(' ', $txt));
