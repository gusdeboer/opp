<?php

namespace Gusdeboer\OPP\Types;

enum AddressType: string implements TypeInterface
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
}
