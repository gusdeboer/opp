<?php

namespace Gusdeboer\OPP\Types;

enum MerchantType: string
{
    case Consumer = 'consumer';
    case Business = 'business';
}
