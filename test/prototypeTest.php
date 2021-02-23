<?php

namespace DesignPatterns\Creational\Prototype\Tests;

use PHPUnit\Framework\TestCase;

require '../design_patterns/prototype.php';

use DesignPatterns\Creational\Prototype\BookPrototype;
use DesignPatterns\Creational\Prototype\FooBookPrototype;
use DesignPatterns\Creational\Prototype\BarBookPrototype;

/**
 * PrototypeTest tests the prototype pattern
 */
class PrototypeTest extends TestCase
{

  public function getPrototype()
  {
    return array(
      array(new FooBookPrototype()),
      array(new BarBookPrototype())
    );
  }

  /**
   * @dataProvider getPrototype
   */
  public function testCreation(BookPrototype $prototype)
  {
    $book = clone $prototype;
    $book->setTitle($book->getCategory() . ' Book');
    $this->assertInstanceOf('DesignPatterns\Creational\Prototype\BookPrototype', $book);
  }
}
