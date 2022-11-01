<?php

/**
 * @param String $word
 * @param String $ch
 * @return String
 */
function reversePrefix($word, $ch)
{
    $result = '';
    $temp_arr = [];
    $index = 0;
    $temp_key = 0;
    $total_length = strlen($word);

    //這裡先找到符合$ch value and key
    //沒有的話就直接把$word 給result
    foreach (str_split($word) as $key => $value) {
        if ($value === $ch) {
            $index = $key;
            $temp_key = $key;
            break;
        } else {
            $result = $word;
        }
    }

    //再將字串轉成數組，將$ch前的字母給暫存數組
    for ($i = 0; $i <= $index; $i++) {
        $temp_arr[$i] = str_split($word)[$temp_key - $i];
    }

    array_reverse($temp_arr);

    //最後將剩下的丟給暫存數組
    for ($j = 1; $j < $total_length - $index; $j++) {
        $temp_arr[$j + $index] = str_split($word)[$temp_key + $j];
    }

    //轉回字串
    $result = implode($temp_arr);

    return $result;
}

$word = "abcdefd";
$ch = "d";
reversePrefix($word, $ch);

//Output: "zxyxxe";
