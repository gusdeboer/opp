<?php

namespace Gusdeboer\OPP\Types;

enum MerchantStatus: string implements TypeInterface
{
    case New = 'new';
    case Pending = 'pending';
    case Live = 'live';
    case Suspended = 'suspended';
    case Terminated = 'terminated';
    case Blocked = 'blocked';

    /**
     * @return array<string>
     */
    public static function getValues(): array
    {
        return array_column(self::cases(), 'value');
    }
}
