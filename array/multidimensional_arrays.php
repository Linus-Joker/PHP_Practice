<?php

/**
  $array = ['key' => value]
 **/

function base()
{
  $age = ['A' => 10, 'B' => 20, 'C' => 30];
  print_r($age);
  echo "A is " . $age['A'] . " years old.";
  foreach ($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "\n";
  }
}

function multidimensional_arrays()
{
  $item = [
    $age = ['A' => 10, 'B' => 20, 'C' => 30],
    $age = ['A' => 40, 'B' => 50, 'C' => 60],
    $age = ['A' => 70, 'B' => 80, 'C' => 90],
    'totalqty'  => 1,
    'totalprice' => 100
  ];

  foreach ($item as $key => $value) {
    echo "key= " . $key . " valueA= " . $value['A'];
    echo "\n";
  }
}

function multidimensional_arrays_cart_test()
{
  $item = [
    $age = ['name' => 'book1', 'price' => 10, 'qty' => 1],
    $age = ['name' => 'book2', 'price' => 20, 'qty' => 1],
    $age = ['name' => 'book3', 'price' => 30, 'qty' => 1],
    'totalqty'  => 13,
    'totalprice' => 300
  ];

  foreach ($item as $key => $value) {
    echo "key= " . $key . " valueName= " . $value['name'];
    echo "------------------------";
    echo "\n";

    foreach ($value as $k => $v) {
      echo "key=" . $key . "value= " . $v;
      echo "\n";
    }
  }
}
