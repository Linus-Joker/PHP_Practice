<?php

/**
 * Input: s = "anagram", t = "nagaram"
 *Output: true 
 */


/**
 * @param String $s
 * @param String $t
 * @return Boolean
 */
function isAnagram($s, $t)
{
    if (strlen($s) != strlen($t)) return 'false';

    //將字串轉成數組
    $s_arr = str_split($s);
    $t_arr = str_split($t);

    //重新排序後比對
    sort($s_arr);
    sort($t_arr);

    //比對每一個是否一樣，不一樣則false
    for ($i = 0; $i < count($s_arr); $i++) {
        if ($s_arr[$i] != $t_arr[$i]) {
            return 'false';
            break;
        }
    }

    return 'true';
}


$s = "car";
$t = "rat";
echo isAnagram($s, $t);


//未解
//Follow up: What if the inputs contain Unicode characters? 
//How would you adapt your solution to such a case?
