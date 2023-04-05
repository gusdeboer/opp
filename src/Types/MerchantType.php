<?php

namespace Gusdeboer\OPP\Types;

use Assert\Assertion;

enum MerchantType: string
{
    case Business = 'business';
    case Consumer = 'consumer';

    public static function fromString(string $type): MerchantType
    {
        switch ($type) {
            case self::Consumer->value:
                $object = self::Consumer;
                break;
            case self::Business->value:
                $object = self::Business;
                break;
            default:
                $object = false;
        }

        Assertion::isInstanceOf($object, self::class);

        return $object;
    }
}
