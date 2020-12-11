<?php

//封裝 
class Dog
{
  // private $name = 'default';

  private $name;

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return 'name: ' . $this->name;
  }
}

$myDog = new Dog();

$myDog->setName('dd');

echo $myDog->getName();
