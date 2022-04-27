<?php

//條件判斷
//if...else
//if 語句 - 在條件成立時(true)執行代碼
//if...else 語句 - 在條件成立時執行一塊代碼，條件不成立時執行另一塊代碼
//if...elseif....else 語句 - 在若干條件之一成立時執行一個代碼塊
//switch 語句 - 在若干條件之一成立時執行一個代碼塊


//迴圈控制
//for
for ($i = 1; $i <= 5; $i++) {
    echo "數字為" . $i . PHP_EOL;
}

//foreach 
$car_arr = array("TOYOTA", "HONDA", "NISSAN");
foreach ($car_arr as $value) {
    echo $value . PHP_EOL;
}

$car_arr = array(1 => "TOYOTA", 2 => "HONDA", 3 => "NISSAN");
foreach ($car_arr as $key => $value) {
    echo "key為 " . $key . "，對應的 value 為 " . $value . PHP_EOL;
}

//while
$i = 1;
while ($i <= 5) {
    echo "The number is " . $i . "\n";
    $i++;
}

//do...while
//語句會至少執行一次代碼，然後檢查條件，
//只要條件成立，就會重複進行循環。
$j = 1;
do {
    $j++;
    echo "The number j is " . $j . "\n";
} while ($j <= 10);
