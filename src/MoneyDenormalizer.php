<?php

namespace Krak\MoneyNormalizer;

use Money\Currency;
use Money\Money;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

class MoneyDenormalizer implements DenormalizerInterface
{
    public function denormalize($data, $class, $format = null, array $context = array()) {
        if ($class === Money::class) {
            return new Money($data['amount'], new Currency($data['currency']));
        } else {
            return new Currency($data);
        }
    }

    public function supportsDenormalization($data, $type, $format = null) {
        return $type === Money::class || $type === Currency::class;
    }
}
