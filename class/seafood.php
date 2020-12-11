<?php
class Menu{
 public $name;
 public $kind;
 
 public function __construct($name, $kind){
    $this->name = $name;
    $this->kind = $kind; 
  }
  
 public function aaa($item, $id){
      echo "kind:" . $id . ",name:" . $item;
    } 
}

$dish = new Menu("chicken", "meat");

echo $dish->aaa("shrimp", "seafood");
?>