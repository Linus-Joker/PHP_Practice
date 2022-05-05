<?php

//算數運算子
//除了 加(+)、減(-)、乘(*)、除(/)、取餘數(%)還有取反(-x)和連接(.)
//取反
$x = 2;
echo "x的取反:" . -$x . "\n"; // -2

//連接 
$a = "hello";
$b = "world";

echo $a . $b . "\n";

//賦值運算子
// x = y
// x += y => x = x+y
// x -= y => x = x-y
// x *= y => x = x * y
// x /= y => x = x / y
// x %= y => x = x % y
// x .= y => x = x.y

//遞增/遞減
//++x 先遞增，再返回x
echo ++$x;

//x++ 先返回x，在加1
echo $x++;

//比較運算子
//邏輯運算子
//數組運算子
//三元運算子
//三元運算子練習1
function getName()
{
    //先設name 為true
    $name = "milk";

    //?前面的變數如果為true，則將$name變數給$userName
    // $userName = $name ? $name : 'nobody';

    //PHP7新寫法
    $userName = $name ?? 'nobody';
    echo $userName . "\n";


    //再設name2 為false
    $name = false;

    //?前面的變數如果為false，則將nobody給$userName
    $userName = $name ? $name : 'nobody';
    echo $userName;
}
getName();

//三元運算子練習2
function name()
{

    $firstName = 'milk';
    $userName = 'banana';
    $placeholder = 'candy';

    $name = $firstName ?? $userName ?? $placeholder ?? "Guest";
    echo $name;
}
name();

//組合比較
$c = $a <=> $b;
//如果 $a > $b, 則 $c 的值為 1。
//如果 $a == $b, 則 $c 的值為 0。
//如果 $a < $b, 則 $c 的值為 -1。
