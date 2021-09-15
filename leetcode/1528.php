<?php

/**
 * @param string $sss
 * @param Integer[] $indices
 * @return string $String
 */
function restoreString(String $sss, array $indices): String
{
    $res = [];
    // $String = null;
    $stringSize = count($indices);
    $ExplodedString = str_split($sss);

    for ($i = 0; $i < $stringSize; $i++) {

        //$res要取得的位置是$indices裡面的數字
        $res[$indices[$i]] = $ExplodedString[$i];
    }

    //php 關聯數組要用ksort()排序
    ksort($res);
    $String = implode($res);

    return $String;
}

echo restoreString("codeleet", [4, 5, 6, 7, 0, 2, 1, 3]);
