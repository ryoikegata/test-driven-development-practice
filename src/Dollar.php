<?php

class Dollar
{
  public int $amount;

  public function __construct(int $amount)
  {
    $this->amount = $amount;
  }

  public function times(int $multiplier): Dollar
  {
    return new Dollar($this->amount * $multiplier);
  }

  public function equals(object $object)
  {
    $dollar = $object;
    return $this->amount === $dollar->amount;
  }
}
