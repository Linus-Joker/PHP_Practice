<?php

//繼承
class Transportation
{
  public $cost = 100;
  private $_hasDriver = true;

  public function run()
  {
    echo "go!!";
  }
}

class Car extends Transportation
{ }

$myCar = new Car();

$myCar->run();
