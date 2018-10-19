<?php

namespace Krak\MoneyNormalizer;

use Money\Currency;
use Money\Money;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

class MoneyDenormalizer implements DenormalizerInterface
{
    public function denormalize($data, $class, $format = null, array $context = array()) {
        return new Money($data['amount'], new Currency($data['currency']));
    }

    public function supportsDenormalization($data, $type, $format = null) {
        return $type === Money::class;
    }
}
