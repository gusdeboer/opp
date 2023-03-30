<?php

namespace Gusdeboer\OPP\Types;

enum MerchantStatus: string
{
    case New = 'new';
    case Pending = 'pending';
    case Live = 'live';
    case Suspended = 'suspended';
    case Terminated = 'terminated';
    case Blocked = 'blocked';
}
