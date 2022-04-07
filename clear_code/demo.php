<?php

# clear code demo
function isDay(string $day)
{
  if (empty($day)) {
    return false;
  }

  $openingDays = [
    'friday', 'saturday', 'sunday'
  ];

  return in_array(strtolower($day), $openingDays, true);
}

// print(isDay('BAA'));
function fibonacci(int $n): int
{
  if ($n === 0 || $n === 1) {
    return $n;
  }

  if ($n > 50) {
    throw new Exception('no');
  }

  return fibonacci($n - 1) + fibonacci($n - 2);
}

// print(fibonacci(7));

function createMicrobrewery(string $breweryName = 'Hipster Brew Co.'): void
{
  echo $breweryName = 'hello';
}
// createMicrobrewery();

class MenuConfig
{
  public $title;
  public $body;
  public $buttonText;
  public $cancellable = false;
}

$config = new MenuConfig();
$config->title = 'Foo';
$config->body = 'Bar';
$config->buttonText = 'Baz';
$config->cancellable = true;

function createMenu(MenuConfig $config): void
{
  print($config->body);
}

createMenu($config);
