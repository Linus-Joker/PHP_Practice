<?php

/**
 * 1.查詢陣列裡最大的數
 * @param array $num_list
 * @return int $maxNum 最大數值
 */
function maxNumber(array $num_list): int
{
    $maxNum = max($num_list);
    return $maxNum;
}

$num_list = [9, 78, 26];
//echo maxNumber($num_list);

/**
 * 2.求兩個日期的差數，例如2021-01-01~2021-12-27
 */
function dateDiff()
{
    $date = strtotime('2021-12-27');
    $date2 = strtotime('2021-01-01');
    // echo $date;
    return ($date - $date2) / (24 * 3600) . "天";
}

// echo dateDiff();

/**
 * 3.字符串將字首轉換成大寫，例如「open_door" 轉換成 「OpenDoor"
 * "make_by_id" 轉換成 "MakeById"。
 */
function toWords($str)
{
    $newStr = str_replace("_", " ", $str);
    $newStr = ucwords($newStr);
    $newStr = str_replace(" ", "", $newStr);
    return $newStr;
}

// echo toWords("make_by_id");

//4.印出前一天的時間格式
// echo date('Y-m-d H:i:s', strtotime('-1 day'));


/**
 * 5.將字串反轉，例如:"abcdefg"
 */

function strReversal(string $str): string
{
    //字串的數字會是0~6，但是這樣給的會是7所以要減1
    $len = strlen($str) - 1;
    $newStr = '';

    for ($i = $len; $i >= 0; $i--) {
        //連接2個字串
        $newStr .= $str[$i];
        // echo $i;
    }

    return $newStr;
}
// echo strReversal("abcdefg");

/**
 * 6.下面的函式會輸出與否?
 */
$num = 10;
function mul()
{
    //function 裡面的變數在外面沒有傳遞近來，所以不會動作
    // $num = $num * 10;
}

// mul();
// echo $num;


//7.雙重md5加密
class test
{

    function Get_test($num)
    {

        $num = md5(md5($num) . "En");

        return $num;
    }
}

//雙重md5加密
// $testObject = new test();
// $encryption = $testObject->Get_test("abcdefg");
// echo $encryption;

//8.FizzBuzz
function fizzBuzz(int $num)
{
    for ($i = 1; $i < $num; $i++) {
        $result = '';
        if ($i % 3 == 0) {
            $result = "Fizz";
        }
        if ($i % 5 == 0) {
            $result = "Buzz";
        }

        if (strlen($result) > 0) {
            echo $result . "\n";
        } else {
            echo $i . "\n";
        }
    }
}

// fizzBuzz(21);

//9.自己的遞迴練習
function recursive(int $num)
{
    if ($num >= 10) return "次數已加到" . $num;

    return recursive($num + 1);
    // return "not plus.";
}

// echo recursive(1);

//10.加總練習
function add()
{
    $num = 0;

    for ($i = 1; $i < 101; $i++) {
        $num = $num + $i;
        // echo $num . "\n";
    }

    echo "1+100的總數=" . $num;
}

// add();

//11.隨機選出1~42的數字，並不重複
function lotto()
{
    $numList = [];
    $numListLen = count($numList);
    // echo in_array(2, $numList);

    //直到數組有6個數字才會停
    while ($numListLen < 6) {
        $randNum = rand(1, 42);

        //如果值沒有在數組裡，就將數值給數組，否則重來
        if (!in_array($randNum, $numList)) {
            array_push($numList, $randNum);
            $numListLen = count($numList);
            // echo $numListLen;
        }
    }

    //印出所選的6個數值，有需要再排序
    print_r($numList);
}

// lotto();

//12.判斷大小寫
//有2個方法，1.preg_match、2.ord()
function checkStrCase($str)
{
    //先判斷是ASCII碼
    $asciiStr = ord($str);

    if ($asciiStr > 64 && $asciiStr < 91) {
        return "A";
    }
    if ($asciiStr > 96 && $asciiStr < 123) {
        return "a";
    }

    return $str . " is not alphabet";
}

// checkStrCase("a");

//13.承12，將大寫轉小寫、小寫轉大寫
function changeStr($str)
{
    $result = checkStrCase($str);

    //小寫轉大寫
    if ($result === "a") return strtoupper($str);

    //大寫轉小寫
    if ($result === "A") return strtolower($str);

    return $result;
}

// echo changeStr(22);

//14.攝氏溫度轉華氏溫度 (F=C*9/5 +32)
function fahrenheitTemperature(float $temp)
{
    $fahrenheit = $temp * 9 / 5 + 32;

    echo "華氏溫度:" . $fahrenheit . "度F";
}

// fahrenheitTemperature(28.9);

//14.2 華氏轉攝氏
//基本上這樣的狀況就寫個類別會比較好
function celsiusTemperature(float $temp)
{
    $celsius = ($temp - 32) * 5 / 9;

    echo "攝氏溫度:" . round($celsius, 2) . "度C";
}

// celsiusTemperature(77.92);

//15.迴文(palindrome)
//依第5題下去改

//16.寫一函數square(n,c),以c字元,印出邊長為n之實心正方形。
//Ex: square(3,'@') 將印出如下形狀

function square($n, $c)
{
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n; $j++) {
            echo $c;
        }
        echo "\n";
    }
}

// square(3, "a");

//17.設計一函數F(w,h),印出寬w,高h如下的數字矩陣。
//(以w=5,h=3為例)，其中第二行是第一行的兩倍, 第三行是第一行的三倍, 以此類推. 

function matrix($w, $h)
{
    //外圈跑高度
    for ($i = 1; $i <= $h; $i++) {
        //內圈跑寬度
        for ($j = 1; $j <= $w; $j++) {
            echo $j * $i;
        }
        echo "\n";
    }
}

// matrix(6, 4);

//18.判斷數字奇偶數
function oddAndEven(int $number)
{
    if ($number < 1) return "number is must integer.";

    if ($number % 2 == 0) return "number is Even.";

    return "Number is Odd.";
}

// echo oddAndEven(6);

//19.亂數產生三個1~100間的正整數亂數，判斷並輸出三數中之最大值及最小值。
function randMaxMinNumber()
{
    $randNumList = [];

    //這有重複數字的問題，可以看上面的解法，懶的寫了
    for ($i = 1; $i < 4; $i++) {
        $randNum = rand(1, 100);
        array_push($randNumList, $randNum);
        echo "第" . $i . "個數字:" . $randNum . "\n";
    }
    // var_dump($randNumList);

    echo "最大的數字=" . max($randNumList);
}

// randMaxMinNumber();

//20.由亂數產生一1~100的貨品價格,求出若以佰元鈔付款購買,
//應找回最少的錢幣個數 50元,10元,5元,1元各為若干個。


//21.20階乘
function factorial()
{
    //C語言好像會進位錯誤，這邊測php沒問題
    $sum = 1;
    for ($i = 1; $i <= 20; $i++) {
        $sum = $sum * $i;
        echo "第" . $i . "次的階乘:" . $sum . "\n";
    }
}

// factorial();

//21.2 階乘遞迴法
function fact(int $num)
{
    if ($num == 0) return 1;

    return $num * fact($num - 1);
}

// echo fact(5);

//22.判斷質數
function judgmentPrime($num)
{
    if ($num <= 1) echo "小於或等於1不是質數";

    for ($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) return 0;
    }

    echo $num . " is prime number.";
}

// judgmentPrime(17);

//23.cal input x get y 
function calY(int $x)
{
    if ($x < -1) return $y = 3 * $x ** 2;

    if ($x == 0) return -3;

    if ($x > 1) return 2 * $x + 3;
}

// echo calY(-2);
// echo calY(0);
// echo calY(5);

//24.輸入日期判斷星座
function constellation()
{
    $bir_date = date("12/31");

    //這邊應該會做12個月的判斷，懶得用就這樣
    if ($bir_date > date(12 / 1) || $bir_date < date(12 / 31)) echo "is 12.";
}

// constellation();

//25.費式數列用for迴圈
function fiboFor(int $num)
{
    if ($num < 1) return 0;

    $f = 0;
    $ff = 1;
    $fn = 0;
    for ($i = 1; $i <= $num; $i++) {
        $fn = $f + $ff;
        $f = $ff;
        $ff = $fn;
        echo $fn . "\n";
    }
}

// fiboFor(10);

//25.2 費氏數列用遞迴
function fiboRes(int $num)
{
    if ($num < 2) return $num;

    return fiboRes($num - 1) + fiboRes($num - 2);
}

// echo fiboRes(4);

//26. 給一陣列裡面的數字為正整數且不重複，看需要補多少數字。
function repairNum(array $list)
{
    $maxNum = max($list);
    $countNum = count($list);

    echo "要補的數字有" . $maxNum - $countNum . "個";
    // echo $countNum;
}

echo repairNum([1, 4, 8]); //5
