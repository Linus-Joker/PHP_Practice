<?php
//abstract 練習
//抽象不能被實體化，類別可以
//抽象不能實作方法內容，如果有抽象方法，在類別裡必須實作

abstract class Animal
{
    public function run()
    {
        echo "It can run";
    }

    abstract public function eat();
}


class Dog extends Animal
{
    public function run()
    {
        parent::run();
    }

    public function eat()
    {
        echo "dog can eat meat";
    }
}


$myDog = new Dog();
$myDog->run();
$myDog->eat();
