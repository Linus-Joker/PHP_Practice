<?php
//abstract and interface

interface Action
{
  public function run();
  public function fast();
}

abstract class Animal implements Action
{
  public function run()
  {
    $this->fast();
  }
}

class Dog extends Animal
{
  public function fast()
  {
    echo 'very fast.';
  }
}

class Cat extends Animal
{
  public function fast()
  {
    echo 'very slow.';
  }
}

$myDog = new Dog();
$myCat = new Cat();

$myDog->run(); // very fast.
$myCat->run(); // very slow.
