<?php

class Dollar
{
  private int $amount;

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

class Franc
{
  private int $amount;

  public function __construct(int $amount)
  {
    $this->amount = $amount;
  }

  public function times(int $multiplier): Franc
  {
    return new Franc($this->amount * $multiplier);
  }

  public function equals(object $object)
  {
    $dollar = $object;
    return $this->amount === $dollar->amount;
  }
}
