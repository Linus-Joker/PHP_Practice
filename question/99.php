<?php
// 99 乘法遞減(到9只會 9*1)
// for ($i = 1; $i < 10; $i++) {
//     for ($j = 1; $j < 11 - $i; $j++) {
//         echo " $i*$j=" . $i * $j . "\n";
//     }
//     echo '<br>';
// }

//九九乘法用2個迴圈
function two_for()
{
    for ($i = 1; $i < 10; $i++) {
        for ($j = 1; $j < 10; $j++) {
            echo "$i * $j=" . $i * $j . "\n";
        }
        echo "\n";
    }
}

// two_for();

//九九乘法用1個迴圈
//忘記for迴圈裡面可以放1個以上的變數
function one_for()
{
    for ($i = 1, $j = 1; $i < 10; $j++) {
        if ($j > 9) {
            $i++;
            $j = 1;
            echo "\n";
        }
        echo "$i * $j = " . $i * $j . "\n";
    }
}
// one_for();


//九九乘法用遞迴
function recursive_nine($i, $j)
{
    //乘數超過9，則被乘數+1
    if ($j === 10) {
        $i = $i + 1;
        $j = 1;
        echo "\n";
    }

    //被乘數超過9則結束九九乘法表
    if ($i == 10) {
        return 0;
    }

    echo $i . ' * ' . $j . ' = ' . $i * $j . "\n";
    return recursive_nine($i, $j + 1);
}

recursive_nine(1, 1);

//使用while 九九乘法
