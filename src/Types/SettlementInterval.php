<?php

namespace Gusdeboer\OPP\Types;

enum SettlementInterval: string
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

    public static function fromString(string $settlementInterval): self
    {
        return match ($settlementInterval) {
            self::Daily->value => self::Daily,
            self::Weekly->value => self::Weekly,
            self::Monthly->value => self::Monthly,
            self::Yearly->value => self::Yearly,
            self::Continuous->value => self::Continuous,
            default => throw new \InvalidArgumentException(sprintf('Invalid settlement interval: %s', $settlementInterval)),
        };
    }
}
