<?php

namespace Gusdeboer\OPP\Types;

use Assert\Assertion;

enum ComplianceStatus: string
{
    case Unverified = 'unverified';
    case Pending = 'pending';
    case Verified = 'verified';

    public static function fromString(string $type): ComplianceStatus
    {
        switch ($type) {
            case self::Unverified->value:
                $object = self::Unverified;
                break;
            case self::Pending->value:
                $object = self::Pending;
                break;
            case self::Verified->value:
                $object = self::Verified;
                break;
            default:
                $object = false;
        }

        Assertion::isInstanceOf($object, self::class);

        return $object;
    }
}
