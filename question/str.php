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

// cal_num($txt);

/**
 * 2.翻轉字串
 * 用內建函式轉
 * 自己寫函式轉
 */

// echo "反轉字串:" . strrev($txt) . "\n";

/**
 * 分割字串後放入數組
 * 要用print_r()顯示
 */
// print_r(explode(' ', $txt));

/**
 * 統一發票兌獎，先寫之後再改
 */

function bill($num)
{
    $prize = [
        '12345678',
        '87654321',
        '65487321'
    ];

    foreach ($prize as $key => $value) {
        if ($num == $value) {
            echo "恭喜中8個號碼:" . $value;
            break;
        }

        if (substr($value, -7) == substr($num, -7)) {
            echo "恭喜中7個號碼:" . substr($value, -7);
            break;
        }

        if (substr($value, -6) == substr($num, -6)) {
            echo "恭喜中6個號碼:" . substr($value, -6);
            break;
        }

        if (substr($value, -5) == substr($num, -5)) {
            echo "恭喜中5個號碼:" . substr($value, -5);
            break;
        }

        if (substr($value, -4) == substr($num, -4)) {
            echo "恭喜中4個號碼:" . substr($value, -4);
            break;
        }

        if (substr($value, -3) == substr($num, -3)) {
            echo "恭喜中3個號碼:" . substr($value, -3);
            break;
        }

        if (substr($value, -3) != substr($num, -3)) {
            echo "這張發票沒中獎";
        }
    }
}

bill('65498732');
