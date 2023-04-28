<?php

namespace Gusdeboer\OPP\Types;

enum MerchantType: string implements TypeInterface
{
    case Business = 'business';
    case Consumer = 'consumer';

    /**
     * @return array<string>
     */
    public static function getValues(): array
    {
        return array_column(self::cases(), 'value');
    }
}
