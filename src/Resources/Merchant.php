<?php

namespace Gusdeboer\OPP\Resources;

final readonly class Merchant implements ResourceInterface
{
    public function __construct()
    {
    }

    public function getUid(): string
    {
        return $this->uid;
    }
}
