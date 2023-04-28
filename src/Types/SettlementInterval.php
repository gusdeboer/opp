<?php

namespace Gusdeboer\OPP\Types;

enum SettlementInterval: string implements TypeInterface
{
    case Daily = 'daily';
    case Weekly = 'weekly';
    case Monthly = 'monthly';
    case Yearly = 'yearly';
    case Continuous = 'continuous';

    /**
     * @return array<string>
     */
    public static function getValues(): array
    {
        return array_column(self::cases(), 'value');
    }
}
