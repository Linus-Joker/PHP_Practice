<?php

/**
 * Return the number of matches played in the tournament until a winner is decided.
 *  n = 7
 *  output = 6
 *  Explanation: Details of the tournament: 
 *- 1st Round: Teams = 7, Matches = 3, and 4 teams advance.
 *- 2nd Round: Teams = 4, Matches = 2, and 2 teams advance.
 *- 3rd Round: Teams = 2, Matches = 1, and 1 team is declared the winner.
Total number of matches = 3 + 2 + 1 = 6.
 */

/**
 * @param Integer $n
 * @return Integer
 */
function numberOfMatches($n)
{
    $arr = [];
    while ($n > 1) {
        $res = floor($n / 2);
        $arr[] = $res;
        $n = $n - $res;
    }

    return array_sum($arr);
}

numberOfMatches(14);

/**
 * 要返回的是比賽的數量，所以每次一輪後
 * 將結果紀錄道術組後後加總
 */
