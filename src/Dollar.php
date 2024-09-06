<?php

class Money {
  protected $amount;

  public function equals(object $object)
  {
    $money = $object;
    return $this->amount === $money->amount && get_class($this) === get_class($money);
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
