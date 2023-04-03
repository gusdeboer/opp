<?php

namespace Gusdeboer\OPP\Resources;

use Gusdeboer\OPP\Types\MerchantType;

final readonly class Merchant implements ResourceInterface
{

    private string $uid;
    private string $country;
    private string $emailAddress;
    private MerchantType $type;

    public function __construct()
    {
    }


    public function setUid(string $uid): self
    {
        $this->uid = $uid;
        return $this;
    }

    public function setCountry(string $country): self
    {
        $this->country = $country;
        return $this;
    }

    public function setEmailAddress(string $emailAddress): self
    {
        $this->emailAddress = $emailAddress;
        return $this;
    }
}
