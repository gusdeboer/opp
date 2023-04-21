<?php

namespace Gusdeboer\OPP\Types;

use Assert\Assertion;

enum MerchantStatus: string
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

    public static function fromString(string $status): self
    {
        return match ($status) {
            self::New->value => self::New,
            self::Pending->value => self::Pending,
            self::Live->value => self::Live,
            self::Suspended->value => self::Suspended,
            self::Terminated->value => self::Terminated,
            self::Blocked->value => self::Blocked,
            default => throw new \InvalidArgumentException(sprintf('Invalid status: %s', $status)),
        };
    }
}
