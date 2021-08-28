<?php

//未解完，後面的array_sum 不知道怎麼運作的
function maximumWealth()
{
    $arr = [[16, 5], [7, 3], [3, 5]];
    return max(array_map('array_sum', $arr));
}

print_r(maximumWealth());


// echo array_sum($arr);
