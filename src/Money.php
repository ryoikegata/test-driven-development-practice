<?php

require_once __DIR__ . '/Expression.php';
class Money implements Expression {
  protected $amount;
  protected $currency;

  public function __construct(int $amount, string $currency)
  {
    $this->amount = $amount;
    $this->currency = $currency;
  }
  // abstract public function times(int $multiplier): Money;

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
    return $this->amount === $money->amount && $this->currency() === $money->currency();
  }

  public static function dollar(int $amount): Money
  {
    return new Money($amount, 'USD');
  }

  public static function franc(int $amount): Money
  {
    return new Money($amount, 'CHF');
  }

  public function times(int $multiplier): Money
  {
    return new Money($this->amount * $multiplier, $this->currency);
  }

  public function plus(Money $addend): Expression
  {
    return new Money($this->amount + $addend->amount, $this->currency);
  }
}
