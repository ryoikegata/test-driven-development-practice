<?php

abstract class Money {
  protected $amount;
  protected $currency;
  abstract public function times(int $multiplier): Money;

  public function money(int $amount, string $currency)
  {
    $this->amount = $amount;
    $this->currency = $currency;
  }

  public function currency(): string
  {
    return $this->currency;
  }

  public function equals(object $object)
  {
    $money = $object;
    return $this->amount === $money->amount && get_class($this) === get_class($money);
  }

  public static function dollar(int $amount): Money
  {
    return new Dollar($amount, 'USD');
  }

  public static function franc(int $amount): Money
  {
    return new Franc($amount, 'CHF');
  }
}

class Dollar extends Money
{
  public function __construct(int $amount, string $currency)
  {
    parent::money($amount, $currency);
  }

  public function times(int $multiplier): Money
  {
    return Money::dollar($this->amount * $multiplier);
  }
}
class Franc extends Money
{
  public function __construct(int $amount, string $currency)
  {
    parent::money($amount, $currency);
  }

  public function times(int $multiplier): Money
  {
    return Money::franc($this->amount * $multiplier);
  }
}
