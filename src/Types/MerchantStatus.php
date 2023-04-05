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

    public static function fromString(string $status): self
    {
        switch ($status) {
            case self::New->value:
                $object = self::New;
                break;
            case self::Pending->value:
                $object = self::Pending;
                break;
            case self::Live->value:
                $object = self::Live;
                break;
            case self::Suspended->value:
                $object = self::Suspended;
                break;
            case self::Terminated->value:
                $object = self::Terminated;
                break;
            case self::Blocked->value:
                $object = self::Blocked;
                break;
            default:
                $object = false;
        }

        Assertion::isInstanceOf($object, self::class);

        return $object;
    }
}
