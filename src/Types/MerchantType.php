<?php

namespace Gusdeboer\OPP\Types;

use Assert\Assertion;

enum MerchantType: string
{
    case Business = 'business';
    case Consumer = 'consumer';

    public static function getValues(): array
    {
        return array_column(self::cases(), 'value');
    }

    public static function fromString(string $status): self
    {
        return match ($status) {
            self::Business->value => self::Business,
            self::Consumer->value => self::Consumer,
            default => throw new InvalidArgumentException(sprintf('Invalid status: %s', $status)),
        };

        Assertion::isInstanceOf($object, self::class);

        return $object;
    }
}
