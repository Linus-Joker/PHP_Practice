<?php
/*
需要父類別的同名函式功能，又希望能寫自己的功能時，可以用
parent:: 父類別方法() 的方式來使用父類別所提供的功能，
然後在同名方法中寫入自己所要做的動作。
*/


class Animal
{
    function eat()
    {
        echo '我要吃';
    }
}

class Dog extends Animal
{
    private $eat;
    function eat()
    {
        $eat = parent::eat();
        echo $eat . '肉';
    }
}

$dog1 = new dog;
$dog1->eat(); // 我要吃肉