<?php

/**
 * @param Integer[] $plants
 * @param Integer $capacity
 * @return Integer
 */
function wateringPlants($plants, $capacity)
{
    // $result = 0;
    // $volume = $capacity;
    // foreach ($plants as $index => $plant) {
    //     if ($plant <= $volume) {
    //         $volume -= $plant;
    //         $result++;
    //         continue;
    //     }
    //     $result += $index * 2 + 1;
    //     $volume = $capacity - $plant;
    //     echo $result . "\n";
    // }

    // echo $result;

    //我自己的
    $out = 0;
    $step = 0;
    $volume = $capacity;

    foreach ($plants as $key => $value) {
        if ($volume < $value) {
            $step = ($key * 2);
            $volume = $capacity;
            $out = $out + $step;
        }
        $volume = $volume - $value;
        $out++;
    }

    return $out;
}


// $plants = [2, 2, 3, 3];
// $capacity = 5;

$plants = [3, 2, 4, 2, 1];
$capacity = 6;
wateringPlants($plants, $capacity);
