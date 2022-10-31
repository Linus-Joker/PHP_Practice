<?php

/**
 * @param String[] $names
 * @param Integer[] $heights
 * @return String[]
 */
function sortPeople($names, $heights)
{
    /**
     * 將heights的值當作temp的key
     * 再將name的值代入，最後在依key排序
     */
    $temp = [];
    for ($i = 0; $i < count($names); $i++) {
        $temp[$heights[$i]] = $names[$i];
    }

    krsort($temp);
    print_r($temp);
}

$names = ["Alice", "Bob", "Bob"];
$heights = [155, 185, 150];
sortPeople($names, $heights);
