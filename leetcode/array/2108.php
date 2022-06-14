<?php

/**
 * 找到第一個palindromic 
 */

/**
 * @param String[] $words
 * @return String
 */
function firstPalindrome($words)
{

    foreach ($words as $key => $value) {
        //假設值和顛倒的值一樣就輸出
        //因為只要第一個所以加上break
        if ($value == strrev($value)) {
            return $value;
            break;
        }
    }

    //如果都沒有就返回空字串
    return "";
}


$words = ["abc", "car", "ad", "raceca", "cool"];
firstPalindrome($words);
