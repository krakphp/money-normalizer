# Money Normalizer

This contains a Symfony Denormalizer for the `moneyphp/money` `Money\Money` class.

## Installation

Install with composer at `krak/money-normalizer`.

## Usage

## MoneyDenormalizer

```php
$denormalizer = new Krak\MoneyNormalizer\MoneyDenormalizer();
$money = $denormalizer->denormalize(['amount' => 10, 'currency' => 'USD'], 'Money\Money');
```

## Symfony Integration

Register the MoneyNormalizerBundle in your kernel in `config/bundles.php`:

```php
<?php

return [
  //...
  Krak\MoneyNormalizer\Bridge\Symfony\MoneyNormalizerBundle::class => ['all' => true],
];
```
