<?php

/**
 * @param Integer[][] $intervals
 * @param Integer[] $newInterval
 * @return Integer[][]
 */
function insert($intervals, $newInterval)
{
    $start = 0;
    $end = 0;
    $n = count($intervals) - 1;
    while ($end <= $n) {
        if ($newInterval[0] <= $intervals[$end][1]) {
            if ($newInterval[1] < $intervals[$end][0]) {
                break;
            }

            $newInterval[0] = min($newInterval[0], $intervals[$end][0]);
            $newInterval[1] = max($newInterval[1], $intervals[$end][1]);
        } else {
            $start += 1;
        }

        $end += 1;
    }
    $ans = array_merge(array_slice($intervals, 0, $start), [$newInterval],                 array_slice($intervals, $end));
    return $ans;
}

$intervals = [[1, 3], [6, 9]];
$newInterval = [2, 5];

insert($intervals, $newInterval); // [[1,5],[6,9]]
