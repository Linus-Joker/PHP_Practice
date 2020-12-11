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

$arr = array('a', 'b', 'c');
array_pop($arr);
print_r($arr);
