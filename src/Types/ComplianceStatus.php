<?php

namespace Gusdeboer\OPP\Types;

enum ComplianceStatus: string
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

    public static function fromString(string $status): self
    {
        return match ($status) {
            self::Unverified->value => self::Unverified,
            self::Pending->value => self::Pending,
            self::Verified->value => self::Verified,
            default => throw new \InvalidArgumentException(sprintf('Invalid status: %s', $status)),
        };
    }
}
