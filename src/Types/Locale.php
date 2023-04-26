<?php

namespace Gusdeboer\OPP\Types;

enum Locale: string
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

    public static function fromString(string $locale): self
    {
        return match ($locale) {
            self::EN->value => self::EN,
            self::NL->value => self::NL,
            self::FR->value => self::FR,
            self::DE->value => self::DE,
            default => throw new \InvalidArgumentException(sprintf('Invalid locale: %s', $locale)),
        };
    }
}
