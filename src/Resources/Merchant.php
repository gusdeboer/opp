<?php

namespace Gusdeboer\OPP\Resources;

final readonly class Merchant implements ResourceInterface
{
    public function __construct(
        private string $uid
    ){
    }

    public function getUid(): string
    {
        return $this->uid;
    }


}
