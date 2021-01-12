<?php

$product1 = [
  'id'  => 1,
  'book' => 'book1',
  'price' => 100
];

$product2 = [
  'id'  => 2,
  'book' => 'book2',
  'price' => 200
];

class Cart
{
  protected $book1;
  protected $book2;
  public $qty;
  public $items;
  public $totalQty = 0;
  public $totalPrice = 0;

  public function __construct($oldCart)
  {
    if ($oldCart) {
      $this->items        = $oldCart->items;
      $this->totalQty     = $oldCart->totalQty;
      $this->totalPrice   = $oldCart->totalPrice;
    }
  }

  public function add($book, $qty, $id)
  {
    $storedItem = ['qty' => 0, 'price' => $book['price'], 'item' => $book];

    if ($this->items) {
      // check if cart has existing product
      // if yes let storedItem = Cart Item
      if (array_key_exists($id, $this->items)) {
        $storedItem = $this->items[$id];
        // dd($storedItem);
      }
    }
    $storedItem['qty'] = $qty;
    //單項商品的總價格
    $storedItem['price'] = $book['price'] * $storedItem['qty'];

    $this->items[$id] = $storedItem;

    //單項商品的總數量，原本的數量加上新增的數量
    $this->totalQty += $qty;
    $this->totalPrice += $storedItem['price'];
  }
}

function cart_test($book)
{
  $storedItem = ['qty' => 0, 'price' => $book['price'], 'item' => $book];
  //總數量
  $storedItem['qty'] = $storedItem['qty'] + 2;

  //全部的價格
  $storedItem['price'] = $book['price'] * $storedItem['qty'];
  // var_dump($storedItem);

  $totalQty = $storedItem['qty'];
  $totalPrice = $storedItem['price'];
  echo "storedItem:";
  print_r($storedItem);
  echo "totalQty:" . $totalQty . "\n";
  echo "totalPrice:" . $totalPrice . "\n";
  echo '----------------------' . "\n";

  //模擬的Session data 是 $storedItem

  // echo "oldCart:";
  // print_r($oldCart);
  $id = 1;
  $oldItem[$id] = $storedItem;
  // print_r($oldItem);

  if (array_key_exists(1, $oldItem)) {
    echo 'key exist.' . "\n";
    $storedItem = $oldItem[$id];
    $storedItem['qty'] = $storedItem['qty'] + 1;
    $storedItem['price'] = $book['price'] * $storedItem['qty'];

    $totalQty = $storedItem['qty'];
    $totalPrice = $storedItem['price'];
    echo "anginstoredItem:";
    print_r($storedItem);
    echo "totalQty:" . $totalQty . "\n";
    echo "totalPrice:" . $totalPrice . "\n";
  };
}

$oldCart = null;
$book = new Cart($oldCart);
// echo $book->totalQty . "\n";
// echo $book->totalPrice . "\n";

$book->add($product1, 1, 1);
// echo $book->totalQty . "\n";
// echo $book->totalPrice . "\n";
print_r($book);

$book2 = new Cart($book);
$book2->add($product2, 2, 2);
print_r($book2);

// cart_test($book1);
// cart_test($book2);
