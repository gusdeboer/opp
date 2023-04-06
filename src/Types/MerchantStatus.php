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
            self::New->value => self::New,
            self::New->value => self::New,
            default => throw new InvalidArgumentException(sprintf('Invalid status: %s', $status)),
        };

        Assertion::isInstanceOf($object, self::class);

        return $object;
    }
}
