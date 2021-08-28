<?php

/**
*依賴注入(DI)和控制反轉(IOC)的練習
*/


//最高的介面，所有的動物都有名子和品種
interface Animal
{
    public function get_name($name);
    public function get_kind($kind);
}

//哺乳類介面
interface Mammals extends Animal
{
    //動作
    public function action();
}

//鳥類介面
interface Birds extends Animal
{
    //動作
    public function action();
}

//狗狗類實作哺乳類介面
class Dog implements Mammals
{
    protected $kind;
    protected $name;

    /**
     * 取得狗狗名稱
     * @param string $name
     * @return string $name
     */
    public function get_name($name)
    {
        return $name;
    }

    /**
     * 取得狗狗品種
     * @param string $kind
     * @return string $kind
     */
    public function get_kind($kind)
    {
        return $kind;
    }

    /**
     * 取得狗狗動作
     * @return string
     */
    public function action(): string
    {
        return "dog cna run not fly.";
    }
}

//鳥類實作鳥類介面
class Bird implements Birds
{
    protected $kind;
    protected $name;

    /**
     * 取得鳥名稱
     * @param string $name
     * @return string $name
     */
    public function get_name($name): string
    {
        return $name;
    }

    /**
     * 取得狗鳥種
     * @param string $kind
     * @return string $kind
     */
    public function get_kind($kind): string
    {
        return $kind;
    }

    /**
     * 取得鳥動作
     * @return string
     */
    public function action(): string
    {
        return 'bird cna fly.';
    }
}

class MainProgram
{
    public function __construct(Animal $animal)
    {
        $this->animal = $animal;
    }

    /**
     * 取得動物名稱
     * @param string $name
     * @return string
     */
    public function get_name($name)
    {
        return $this->animal->get_name($name);
    }

    /**
     * get animal kind
     * @param string $kind
     * @return string
     */
    public function get_kind($kind)
    {
        return $this->animal->get_kind($kind);
    }

    /**
     * 取得動物的動作
     * @return string
     */
    public function action(): string
    {
        return $this->animal->action();
    }

    /**
     * 取得動物名稱和品種、動作
     * @param string $name
     * @param string $kind
     * 
     * @return array $data
     */
    public function main(string $name, string $kind): array
    {
        $name = $this->get_name($name);
        $kind = $this->get_kind($kind);
        $action = $this->action();

        $data = [
            'name' => $name,
            'kind' => $kind,
            'action'    => $action
        ];

        return $data;
    }
}

$dong = new Dog();
$main = new MainProgram($dong);
print_r($main->main('Dong', 'Maltese'));

$tracey = new Bird();
$main = new MainProgram($tracey);
print_r($main->main('tracey', 'Canary'));
