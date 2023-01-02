<?php

/**
 * @param String[] $s
 */
function reverseString(&$s)
{
    $t = floor(count($s) / 2);
    $start = 0;
    $end = count($s) - 1;
    $temporary = '';

    while ($start < $t) {
        $temporary = $s[$start];
        $s[$start] = $s[$end];
        $s[$end] = $temporary;

        $start++;
        $end--;
    }

    /*
    for ($i = 0; $i < $t; $i++) {
        $temporary = $s[$start];
        $s[$start] = $s[$end];
        $s[$end] = $temporary;

        $start++;
        $end--;
    }
    */

    print_r($s);
}

$s = ["h", "e", "l", "l", "o"];
reverseString($s);


//在已知步驟次數下，都算是O(1)
