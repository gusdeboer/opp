<?php

namespace Gusdeboer\OPP\Types;

enum ComplianceStatus: string implements TypeInterface
{
    case Unverified = 'unverified';
    case Pending = 'pending';
    case Verified = 'verified';

    /**
     * @return array<string>
     */
    public static function getValues(): array
    {
        return array_column(self::cases(), 'value');
    }
}
