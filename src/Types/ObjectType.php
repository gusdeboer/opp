<?php

namespace Gusdeboer\OPP\Types;

enum ObjectType: string implements TypeInterface
{
    case Merchant = 'merchant';
    case Address = 'address';

    /**
     * @return array<string>
     */
    public static function getValues(): array
    {
        return array_column(self::cases(), 'value');
    }
}
