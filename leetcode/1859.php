<?php

/**
 * @param String $s
 * @return String
 */
function sortSentence($s)
{
    $temporary_arr = [];
    $arr = explode(' ', $s);

    foreach ($arr as $key => $value) {
        $temporary_arr[substr($value, -1)] = substr($value, 0, -1);
    }

    ksort($temporary_arr);
    // print_r($empty_arr);

    echo join(' ', $temporary_arr);
}

$s = "is2 sentence4 This1 a3";
sortSentence($s);

/**
 * solution:
 * 將字串解開後取得後面的數字當鍵值，並將字串放入
 * 重新依照鍵值排序
 * 最後加在一起
 */
