<?php

//依賴注入練習
interface Food
{
    public function food();
}

class Apple implements Food
{
    public function food(): string
    {
        return "eat apple. \n";
    }
}

class Hamburger implements Food
{
    public function food(): string
    {
        return "eat hamburger. \n";
    }
}


//1.建構子注入
class People
{
    public function __construct(Food $food)
    {
        $this->food = $food;
    }
    public function eat()
    {
        echo $this->food->food();
    }
}

//2.
class Human
{ }


$apple = new Apple();
// $a->Food();

$hamburger = new Hamburger();
// $h->Food();

//建構子注入範例
$p = new People($apple);
$p->eat();

$h = new People($hamburger);
$h->eat();
