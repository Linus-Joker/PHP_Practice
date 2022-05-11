<?php

/**
 * Maximum Number of Words Found in Sentences
 * 找到數組裡句子最多的單字數
 */

/**
 * @param String[] $sentences
 * @return Integer
 */
function mostWordsFound($sentences)
{
    $max_quantity = 0;

    //get array sentences
    foreach ($sentences as $key => $value) {
        // $str = $value;
        $arr = explode(" ", $value);

        //get sentences quantity
        $sentences_quantity = count($arr);

        if ($sentences_quantity > $max_quantity) {
            $max_quantity = $sentences_quantity;
        }
    }

    return $max_quantity;
}

$sentences = [
    "alice and bob love leetcode",
    "i think so too",
    "this is great thanks very much"
];

echo mostWordsFound($sentences);

/**
 * Solution:
 * 我的解法是先拆解數組再將取得字串分割數
 * 最後找到最大的單字數
 */
