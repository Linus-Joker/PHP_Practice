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
	//原本要吃食物要依賴apple或者hamburger
	//但是當要改吃別種食物，就要改食物內容
	//現在透過Food interface 去找到其他食物類別
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
