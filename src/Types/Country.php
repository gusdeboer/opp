<?php

namespace Gusdeboer\OPP\Types;

use Assert\Assert;
use Assert\Assertion;

enum Country: string
{
    case Belgium = 'bel';
    case Bulgaria = 'bgr';
    case Cyprus = 'cyp';
    case Denmark = 'dnk';
    case Germany = 'deu';
    case Estonia = 'est';
    case Finland = 'fin';
    case France = 'fra';
    case Greece = 'grc';
    case Hungary = 'hun';
    case Ireland = 'irl';
    case Italy = 'ita';
    case Croatia = 'hrv';
    case Lithuania = 'ltu';
    case Latvia = 'lva';
    case Luxembourg = 'lux';
    case Malta = 'mlt';
    case TheNetherlands = 'nld';
    case Norway = 'nor';
    case Austria = 'aut';
    case Poland = 'pol';
    case Portugal = 'prt';
    case Romania = 'rou';
    case Slovenia = 'svn';
    case Slovakia = 'svk';
    case Spain = 'esp';
    case CzechRepublic = 'cze';
    case GreatBritain = 'gbr';
    case Sweden = 'swe';

    /**
     * @return array<string>
     */
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
            default => throw new \InvalidArgumentException(sprintf('Invalid country: %s', $country)),
        };
    }
}
