<?php
class Demo
{
  public $hello = 'Hello World' . "\n";

  public function __construct()
  {
    echo 'run __construct()' . "\n";
  }

  public function __destruct()
  {
    echo 'run __destruct()' . "\n";
  }

  public function hello()
  {
    echo $this->hello;
  }
}

$demo = new Demo();
$demo->hello();
