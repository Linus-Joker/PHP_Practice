<?php

/**
 * AbstractFactory
 */

// 產品類：
// 汽車（抽象產品介面）
interface AutoProduct
{
  public function drive();
}

//奧迪A4（具體產品類）
class Audia implements AutoProduct
{

  //獲取汽車名稱
  public function drive()
  {
    echo 'Audia4' . "\n";
  }
}

//賓士C200（具體產品類）

class Benz implements AutoProduct
{
  //獲取汽車名稱
  public function drive()
  {
    echo 'Benz' . "\n";
  }
}

//空調（抽象產品介面）
interface AirCondition
{
  public function blow();
}

//格力空調某型號（具體產品類）
class GreeAirCondition implements AirCondition
{
  public function blow()
  {
    echo "吹格力空調某型號" . "\n";
  }
}

//海爾空調某型號（具體產品類）
class HaierAirCondition implements AirCondition
{
  public function blow()
  {
    echo "吹海爾空調某型號" . "\n";
  }
}

//工廠類：
//工廠介面
interface Factory
{
  public function getAuto();
  public function getAirCondition();
}


//工廠A = 奧迪A4 + 海爾空調某型號
class AFactory implements Factory
{
  //汽車
  public function getAuto()
  {
    return new Audia();
  }

  //空調
  public function getAirCondition()
  {
    return new HaierAirCondition();
  }
}

//工廠B = 賓士C200 + 格力空調某型號
class BFactory implements Factory
{
  //汽車
  public function getAuto()
  {
    return new Benz();
  }

  //空調
  public function getAirCondition()
  {
    return new GreeAirCondition();
  }
}

//客戶端測試：
//客戶端測試代碼
$factoryA = new AFactory();
$factoryB = new BFactory();

//A工廠製作車
$auto_carA = $factoryA->getAuto();
$auto_airA = $factoryA->getAirCondition();

//B工廠製作車
$auto_carB = $factoryB->getAuto();
$auto_airB = $factoryB->getAirCondition();


//開奧迪車+吹海爾空調
$auto_carA->drive();
$auto_airA->blow(); //熱的時候可以吹吹空調

//開賓士車+吹格力空調;
$auto_carB->drive();
$auto_airB->blow(); //熱的時候可以吹吹空調
