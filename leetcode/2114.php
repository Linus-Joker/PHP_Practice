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
    $max_sentences = 0;
    foreach ($sentences as $key => $value) {
        $str = $value;
        $arr = explode(" ", $str);
        $count_str = count($arr);

        if ($count_str > $max_sentences) {
            $max_sentences = $count_str;
        }
    }

    return $max_sentences;
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
