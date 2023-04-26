<?php

namespace Gusdeboer\OPP\Types;

enum AddressType: string
{
    case Default = 'default';
    case Manually = 'manually';
    case Invoice = 'invoice';

    /**
     * @return array<string>
     */
    public static function getValues(): array
    {
        return array_column(self::cases(), 'value');
    }

    public static function fromString(string $address): self
    {
        return match ($address) {
            self::Default->value => self::Default,
            self::Manually->value => self::Manually,
            self::Invoice->value => self::Invoice,
            default => throw new \InvalidArgumentException(sprintf('Invalid address type: %s', $address)),
        };
    }
}
