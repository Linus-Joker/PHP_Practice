<?php

class Base
{
  public function eat()
  {
    echo 'eat.';
  }

  public function run()
  {
    echo 'run.';
  }
}


class Animal
{
  protected $base;

  public function __construct()
  {
    $this->base = new Base();
  }

  public function behavior()
  {
    $this->base->run();
  }
}


$dog = new Animal();
$dog->behavior();
