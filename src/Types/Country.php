<?php

namespace Gusdeboer\OPP\Types;

use Assert\Assert;
use Assert\Assertion;

enum Country: string implements TypeInterface
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
}
