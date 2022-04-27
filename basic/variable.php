<?php

//一般變量
function basic_variable($x, $y)
{
    $result = $x + $y;

    return $result;
}

// echo basic_variable(3, 5);

/**
 * php 變量作用域，有4種不同的變量作用域
 * local 區域變量
 * global 全域變樣
 * static 靜態變量
 * parameter 函數參數作用 
 */

$x = 5; //全域變量
//全域和區域變量
function global_local_variable()
{
    $y = 10;
    echo "函數內的變量:" . $y . "\n";
    //$x is global   
}

// global_local_variable();
// echo "全域變量" . $x . "\n"; // $y is local;


//訪問全域變量
function global_variable()
{
    global $x;

    echo "全域變量:" . $x . '\n';

    //也可以將變量存在$GLOBALS[index]的數組中
    echo $GLOBALS['x'] . '\n';
}

// global_variable();


//訪問靜態變量
//當函數完成後，會將變量刪除
//如果希望繼續使用某個區域變量，可以使用static
function static_variable()
{
    static $x = 0;
    echo $x;
    $x++;

    echo PHP_EOL;
}

// static_variable(); //0
// static_variable(); //1
// static_variable(); //2
