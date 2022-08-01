<?php

/**
 * 題目大意是將一串ARRAY的字串顛倒，並且限制空間複雜度O(1)
 * reverseString()和reverseStringTwo()是用for和while迴圈
 * 並不符合這題的限制，最後的Example是參考解答寫出來。
 */

/**
 * @param String[] $s
 * @return Array $new_arr
 */
function reverseString(&$s)
{
    //for解法，O(n)
    $arr_len = count($s) - 1;
    $new_arr = [];

    for ($i = $arr_len; $i >= 0; $i--) {
        array_push($new_arr, $s[$i]);
    }

    print_r($new_arr);
}

/**
 * @param String[] $s
 * @return Array $new_arr
 */
function reverseStringTwo(&$s)
{
    //while解法，O(n)
    $arr_len = count($s) - 1;
    $new_arr = [];

    while ($arr_len >= 0) {
        array_push($new_arr, $s[$arr_len]);
        // echo $arr_len;
        $arr_len--;
    }

    print_r($new_arr);
}


//其實這個有使用python做過，但是因為語法不同
//沒辦法直接一行交換，所以要先儲存一個位置的值
//再將它的值換掉後，在和另一邊交換

/**
 * @param String[] $s
 * @return Array $s
 */
function reverseStringExample(&$s)
{
    //in-place algorithm，O(1)
    $count = count($s);

    //參考解法，有點像排序法，將前後互換
    for ($i = 0; $i < $count / 2; $i++) {
        //tmp一開始為index[0]的值
        $tmp = $s[$i];

        //最後一個值給第0個值
        $s[$i] = $s[$count - 1 - $i];

        //一開始的0值給最後一個
        $s[$count - 1 - $i] = $tmp;
    }

    // return $s;
    print_r($s);
}

$s = ["a", "b", "n", "o", "s", "y"];

// reverseString($s);
// reverseStringTwo($s);
reverseStringExample($s);
