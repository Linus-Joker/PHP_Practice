<?php

class A
{

  public $count = 1;
  public function __clone()
  {
    $this->count++;
  }
}

$a = new A();
$b = $a;
$b->count == 99;

var_dump($a->count);
var_dump($b->count);

var_dump($a === $b);
