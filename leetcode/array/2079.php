<?php

/**
 * @param Integer[] $plants
 * @param Integer $capacity
 * @return Integer
 */
function wateringPlants($plants, $capacity)
{
    $result = 0;
    $volume = $capacity;
    foreach ($plants as $index => $plant) {
        if ($plant <= $volume) {
            $volume -= $plant;
            $result++;
            continue;
        }
        $result += $index * 2 + 1;
        $volume = $capacity - $plant;
    }
    echo $result;
}


$plants = [2, 2, 3, 3];
$capacity = 5;
wateringPlants($plants, $capacity);
