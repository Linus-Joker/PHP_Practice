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



/**
 * @param String $word
 * @param String $ch
 * @return String
 */
function reversePrefixExample($word, $ch)
{
    //將字串拆解數組
    $w_parts = str_split($word);

    //找出$ch出現的第一個index
    $ch_location = array_search($ch, $w_parts);

    //沒有就返回原字串word
    if ($ch_location === false) return $word;

    //取出數組的位子從0到出現的地方，翻轉
    $ctr = array_slice($w_parts, 0, $ch_location + 1);
    krsort($ctr);

    //將原數組0~長度的位子刪除，添加剛剛翻轉的部分
    array_splice($w_parts, 0, $ch_location, $ctr);

    //最後轉回字串返回
    return implode('', $w_parts);
}

$word = "abcdefd";
$ch = "d";

print_r(reversePrefixExample($word, $ch));
