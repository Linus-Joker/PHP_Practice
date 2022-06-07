<?php

/**
 *題目看起來是將2個數組裡面的
 *字串連起來之後看有沒有一樣
 *
 */

/**
 * @param String[] $word1
 * @param String[] $word2
 * @return Boolean
 */

function arrayStringsAreEqual($word1, $word2)
{
    $new_word1 = '';
    $new_word2 = '';

    //個別將數組裡的字串連起來
    foreach ($word1 as $key => $value) {
        $new_word1 = $new_word1 . $value;
    }

    foreach ($word2 as $key => $value) {
        $new_word2 = $new_word2 . $value;
        // echo $new_word2;
    }

    //最後在比較，一樣為true，否則為false
    $result = $new_word1 === $new_word2 ? 'true' : 'false';

    return $result;
}

$word1 = ["a", "cb"];
$word2 = ["ab", "c"];

arrayStringsAreEqual($word1, $word2);
