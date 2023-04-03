<?php

namespace Gusdeboer\OPP\Resources;

use Gusdeboer\OPP\Types\MerchantType;

final readonly class Merchant implements ResourceInterface
{
    private string $uid;
    private string $emailAddress;
    private string $status; // MerchantStatus
    private array $compliance; // Compliance
    private MerchantType $type;
    private ?string $cocNumber;
    private ?array $legalEntity; // LegalEntity
    private ?array $tradingNames;
    private ?string $name;
    private ?string $phone;
    private ?string $vatNumber;
    private ?string $country;
    private ?string $sector;
    private ?array $addresses; // Address
    private ?array $contacts; // Contact
    private ?array $profiles; // Profile
    private ?array $paymentMethods; // PamentMethod
    private ?array $notifyUrl; // NotifyUrl
    private ?array $returnUrl; // PamentMethod

    private ?array $metaData;

    private int $created;
    private int $updated;

    public function __construct()
    {
    }

    /**
     * @return string
     */
    public function getUid(): string
    {
        return $this->uid;
    }

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * @return string
     */
    public function getEmailAddress(): string
    {
        return $this->emailAddress;
    }

    /**
     * @return MerchantType
     */
    public function getType(): MerchantType
    {
        return $this->type;
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
