<?php

namespace Gusdeboer\OPP\Types;

use Assert\Assert;
use Assert\Assertion;

enum CountryType: string
{
    case Belgium = 'BEL'; //Belgium,
    case Bulgaria = 'BGR'; //Bulgaria
    case Cyprus = 'CYP'; //Cyprus
    case Denmark = 'DNK'; //Denmark
    case Germany = 'DEU'; //Germany
    case Estonia = 'EST'; //Estonia
    case Finland = 'FIN'; //Finland
    case France = 'FRA'; //France
    case Greece = 'GRC'; //Greece
    case Hungary = 'HUN'; //Hungary
    case Ireland = 'IRL'; //Ireland
    case Italy = 'ITA'; //Italy
    case Croatia = 'HRV'; //Croatia
    case Lithuania = 'LTU'; //Lithuania
    case Latvia = 'LVA'; //Latvia
    case Luxembourg = 'LUX'; //Luxembourg
    case Malta = 'MLT'; //Malta
    case TheNetherlands = 'NLD'; //The Netherlands
    case Norway = 'NOR'; //Norway
    case Austria = 'AUT'; //Austria
    case Poland = 'POL'; //Poland
    case Portugal = 'PRT'; //Portugal
    case Romania = 'ROU'; //Romania
    case Slovenia = 'SVN'; //Slovenia
    case Slovakia = 'SVK'; //Slovakia
    case Spain = 'ESP'; //Spain
    case CzechRepublic = 'CZE'; //Czech Republic
    case GreatBritain = 'GBR'; //Great-Britain
    case Sweden = 'SWE'; //Sweden

    public static function getValues(): array
    {
        return array_column(self::cases(), 'value');
    }

    public static function fromString(string $country): self
    {
        return match ($country) {
            self::Belgium->value => self::Belgium,
            self::Bulgaria->value => self::Bulgaria,
            self::Cyprus->value => self::Cyprus,
            self::Denmark->value => self::Denmark,
            self::Germany->value => self::Germany,
            self::Estonia->value => self::Estonia,
            self::Finland->value => self::Finland,
            self::France->value => self::France,
            self::Greece->value => self::Greece,
            self::Hungary->value => self::Hungary,
            self::Ireland->value => self::Ireland,
            self::Italy->value => self::Italy,
            self::Croatia->value => self::Croatia,
            self::Lithuania->value => self::Lithuania,
            self::Latvia->value => self::Latvia,
            self::Luxembourg->value => self::Luxembourg,
            self::Malta->value => self::Malta,
            self::TheNetherlands->value => self::TheNetherlands,
            self::Norway->value => self::Norway,
            self::Austria->value => self::Austria,
            self::Poland->value => self::Poland,
            self::Portugal->value => self::Portugal,
            self::Romania->value => self::Romania,
            self::Slovenia->value => self::Slovenia,
            self::Slovakia->value => self::Slovakia,
            self::Spain->value => self::Spain,
            self::CzechRepublic->value => self::CzechRepublic,
            self::GreatBritain->value => self::GreatBritain,
            self::Sweden->value => self::Sweden,
            default => throw new InvalidArgumentException(sprintf('Invalid status: %s', $country)),
        };

        Assertion::isInstanceOf($object, self::class);

        return $object;
    }
}
