<?php

/**
 * You are given an array items, where each items[i] = [typei, colori, namei] describes the type, color, and name of the ith item. You are also given a rule represented by two strings, ruleKey and ruleValue.

The ith item is said to match the rule if one of the following is true:

ruleKey == "type" and ruleValue == typei.
ruleKey == "color" and ruleValue == colori.
ruleKey == "name" and ruleValue == namei.
 */

/**
 * 題目給你一組items array，找到指定的ruleKey和ruleValue的數量
 */

/**
 * @param String[][] $items
 * @param String $ruleKey
 * @param String $ruleValue
 * @return Integer
 */
function countMatches($items, $ruleKey, $ruleValue)
{
    $result = 0;
    if ($ruleKey == "type") {
        $i = 0;
    } elseif ($ruleKey == "color") {
        $i = 1;
    } elseif ($ruleKey == "name") {
        $i = 2;
    }

    foreach ($items as $key => $value) {
        // echo $value[$i];
        if ($value[$i] == $ruleValue) {
            $result++;
        }
    }

    echo $result;
}

$items = [
    ["phone", "blue", "pixel"],
    ["computer", "silver", "lenovo"],
    ["phone", "gold", "iphone"]
];


$ruleKey = "color";
$ruleValue = "silver";

countMatches($items, $ruleKey, $ruleValue);

//找到指定的ruleKey後代入找ruleValue，each 算數量

//以下是leetcode 比較快的解達答
// function countMatches($items, $ruleKey, $ruleValue)
// {
//     $hash = [
//         "type" => 0,
//         "color" => 1,
//         "name" => 2
//     ];

//     $count = 0;
//     $key = $hash[$ruleKey];
//     foreach ($items as $item) {
//         if ($item[$key] == $ruleValue) {
//             $count++;
//         }
//     }
//     return $count;
// }
