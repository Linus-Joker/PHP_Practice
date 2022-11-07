<?php


//這個版本和幾年前的會因為超出太多而失敗
/**
 * @param Integer[] $prices
 * @return Integer
 */
function maxProfit($prices)
{
    $len = count($prices) - 1;
    $max = 0;

    for ($i = $len; $i > 0; $i--) {
        for ($j = 0; $j < $i; $j++) {
            if ($prices[$i] - $prices[$j] > $max) {
                $max = $prices[$i] - $prices[$j];
            }
        }
    }

    echo $max;
}


// $prices = [7, 1, 5, 3, 6, 4];
$prices = [7, 8, 2, 3, 9, 4];
// maxProfit($prices);


//這是別人的解答
function maxPr($prices)
{
    $n = count($prices);
    $profit_old = 0;
    $j = 0;
    for ($i = 1; $i < $n; $i++) {
        $sell = $prices[$i];
        $buy = $prices[$j];
        $profit = $sell - $buy;
        if ($profit > $profit_old) {
            $profit_old = $profit;
        } elseif ($profit < 0) {
            $j = $i;
        }
    }

    return $profit_old;
}

echo maxPr($prices);
