<?php

function restoreString(String $sss, array $indices)
{
    $res = [];
    // $String = null;
    $stringSize = count($indices);
    $ExplodedString = str_split($sss);

    for ($i = 0; $i < $stringSize; $i++) {
        $res[$indices[$i]] = $ExplodedString[$i];
    }
    ksort($res);
    $String = implode($res);

    return $String;
}


// echo restoreString("codeleet", [4, 5, 6, 7, 0, 2, 1, 3]);
print_r(restoreString("codeleet", [4, 5, 6, 7, 0, 2, 1, 3]));
