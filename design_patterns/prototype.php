<?php

namespace DesignPatterns\Creational\Prototype;

/**
 * Prototype
 */


/**
 * Bookprototype class
 */

abstract class Bookprototype
{
  /**
   * @var string
   */
  protected $title;
  protected $category;

  abstract public function __clone();

  public function getTitle()
  {
    return $this->title;
  }

  public function setTitle($title)
  {
    $this->title = $title;
  }
}

/**
 * BarBookPrototype class
 */

class BarBookPrototype extends Bookprototype
{
  protected $category = 'Bar';
  public function __clone()
  { }
}

/**
 * FooBookPrototype class
 */

class FooBookPrototype extends BookPrototype
{
  protected $category = 'Foo';

  /**
   * empty clone
   */
  public function __clone()
  { }
}
