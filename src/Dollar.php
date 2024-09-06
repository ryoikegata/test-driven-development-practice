<?php

abstract class Money {
  protected $amount;
  abstract public function times(int $multiplier): Money;

  public function equals(object $object)
  {
    $money = $object;
    return $this->amount === $money->amount && get_class($this) === get_class($money);
  }

  public static function dollar(int $amount): Money
  {
    return new Dollar($amount);
  }

  public static function franc(int $amount): Money
  {
    return new Franc($amount);
  }
}

class Dollar extends Money
{

  public function __construct(int $amount)
  {
    $this->amount = $amount;
  }
  public function times(int $multiplier): Money
  {
    return new Dollar($this->amount * $multiplier);
  }
}
class Franc extends Money
{

  public function __construct(int $amount)
  {
    $this->amount = $amount;
  }

  public function times(int $multiplier): Money
  {
    return new Franc($this->amount * $multiplier);
  }
}
