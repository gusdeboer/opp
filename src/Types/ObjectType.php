<?php

namespace Gusdeboer\OPP\Types;

use Assert\Assert;
use Assert\Assertion;

enum ObjectType: string
{
    case Merchant = 'merchant';

    /**
     * @return array<string>
     */
    public static function getValues(): array
    {
        return array_column(self::cases(), 'value');
    }

    public static function fromString(string $status): self
    {
        return match ($status) {
            self::Merchant->value => self::Merchant,
            default => throw new \InvalidArgumentException(sprintf('Invalid object: %s', $status)),
        };
    }
}
