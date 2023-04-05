<?php

namespace Gusdeboer\OPP\Types;

use Assert\Assert;
use Assert\Assertion;

enum ObjectType: string
{
    case Merchant = 'merchant';

    public static function fromString(string $type): self
    {
        switch ($type) {
            case self::Merchant->value:
                $object = self::Merchant;
                break;

            default:
                $object = false;
        }

        Assertion::isInstanceOf($object, self::class);

        return $object;
    }
}
