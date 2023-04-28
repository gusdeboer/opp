<?php

namespace Gusdeboer\OPP\Types;

enum Locale: string implements TypeInterface
{
    case EN = 'en';
    case NL = 'nl';
    case FR = 'fr';
    case DE = 'de';
    /**
     * @return array<string>
     */
    public static function getValues(): array
    {
        return array_column(self::cases(), 'value');
    }
}
