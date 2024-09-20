<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../../src/Money.php';

class MoneyTest extends TestCase
{
  public function testMultiplication()
  {
    $five =Money::dollar(5);
    $this->assertEquals(Money::dollar(10), $five->times(2));
    $this->assertEquals(Money::dollar(15), $five->times(3));
  }

  public function testEquality()
  {
    $this->assertTrue((Money::dollar(5))->equals(Money::dollar(5)));
    $this->assertFalse((Money::dollar(5))->equals(Money::dollar(6)));
    $this->assertFalse((Money::franc(5))->equals(Money::dollar(5)));
  }
  public function testCurrency()
  {
    $this->assertEquals('USD', Money::dollar(1)->currency());
    $this->assertEquals('CHF', Money::franc(1)->currency());
  }
}
