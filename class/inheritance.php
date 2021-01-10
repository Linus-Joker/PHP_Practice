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

class Bike extends Car
{ }

$myCar = new Car();
$myCar->run();

$mybike = new Bike();
$mybike->run();
