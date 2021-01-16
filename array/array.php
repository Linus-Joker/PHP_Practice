<?php

// $age=array("Peter"=>1,"Ben"=>"37","Joe"=>"43");

// foreach($age as $key=>$a){
// print_r($key);  //PeterBenJoe
// }


//個人覺得: 使用DB抓出來的數據原型應該是這樣
// $age2 = array("peter"=>{
// "id":1	
// },
// )

//這2種是一樣的
// $arr = array('a' => 10, 'b' => 20, 'c' => 30);
// // array_pop($arr);
// print_r($arr);
// $age = ['A' => 10, 'B' => 20, 'C' => 30];
// print_r($age);
// echo "-------------------------";

//多維數組
// $cars = array(
//   array("Volvo", 100, 96),
//   array("BMW", 60, 59),
//   array("Toyota", 110, 100)
// );
// print_r($cars);
// echo "-------------------------";

$cats = [
  ["meme" => 10],
  ["momo" => 20],
  ["coco" => 30]
];
// print_r($cats);
echo "-------------------------";
$newCat = ["lala" => 40];
array_push($cats, $newCat);
print_r($cats);

//刪除某一個鍵值
unset($cats[1]);
print_r($cats);

//刪第一個
// array_shift($cats);
// print_r($cats);
//刪最後一個
// array_pop($cats);
// print_r($cats);
echo "-------------------------";
