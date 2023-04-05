<?php

namespace Gusdeboer\OPP\Resources;

use Gusdeboer\OPP\Resources\Traits\ResourceTrait;
use Gusdeboer\OPP\Types\MerchantStatus;
use Gusdeboer\OPP\Types\MerchantType;
use Gusdeboer\OPP\Types\ObjectType;

final class Merchant implements ResourceInterface
{
    use ResourceTrait;

    private string $emailAddress;
    private MerchantStatus $status;
    private Compliance $compliance;
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
    public ?array $returnUrl; // PamentMethod

    private ?array $metaData;

    public function __construct()
    {
    }

    public function getEmailAddress(): string
    {
        return $this->emailAddress;
    }

    public function setEmailAddress(string $emailAddress): void
    {
        $this->emailAddress = $emailAddress;
    }

    public function getStatus(): MerchantStatus
    {
        return $this->status;
    }

    public function setStatus(string $status): void
    {
        $this->status = MerchantStatus::fromString($status);
    }

    /**
     * @return array
     */
    public function getCompliance(): ?Compliance
    {
        return $this->compliance;
    }

    /** @param Compliance $compliance */
    public function setCompliance(Compliance $compliance): void
    {
        $this->compliance = $compliance;
    }

    public function getType(): MerchantType
    {
        return $this->type;
    }

    public function setType(string $type): void
    {
        $this->type = MerchantType::fromString($type);
    }

    public function getCocNumber(): ?string
    {
        return $this->cocNumber;
    }

    public function setCocNumber(?string $cocNumber): void
    {
        $this->cocNumber = $cocNumber;
    }

    public function getLegalEntity(): ?array
    {
        return $this->legalEntity;
    }

    public function setLegalEntity(?array $legalEntity): void
    {
        $this->legalEntity = $legalEntity;
    }

    public function getTradingNames(): ?array
    {
        return $this->tradingNames;
    }

    public function setTradingNames(?array $tradingNames): void
    {
        $this->tradingNames = $tradingNames;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): void
    {
        $this->phone = $phone;
    }

    public function getVatNumber(): ?string
    {
        return $this->vatNumber;
    }

    public function setVatNumber(?string $vatNumber): void
    {
        $this->vatNumber = $vatNumber;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(?string $country): void
    {
        $this->country = $country;
    }

    /**
     * @return string|null
     */
    public function getSector(): ?string
    {
        return $this->sector;
    }

    /**
     * @param string|null $sector
     */
    public function setSector(?string $sector): void
    {
        $this->sector = $sector;
    }

    /**
     * @return array|null
     */
    public function getAddresses(): ?array
    {
        return $this->addresses;
    }

    /**
     * @param array|null $addresses
     */
    public function setAddresses(?array $addresses): void
    {
        $this->addresses = $addresses;
    }

    /**
     * @return array|null
     */
    public function getContacts(): ?array
    {
        return $this->contacts;
    }

    /**
     * @param array|null $contacts
     */
    public function setContacts(?array $contacts): void
    {
        $this->contacts = $contacts;
    }

    /**
     * @return array|null
     */
    public function getProfiles(): ?array
    {
        return $this->profiles;
    }

    /**
     * @param array|null $profiles
     */
    public function setProfiles(?array $profiles): void
    {
        $this->profiles = $profiles;
    }

    /**
     * @return array|null
     */
    public function getPaymentMethods(): ?array
    {
        return $this->paymentMethods;
    }

    /**
     * @param array|null $paymentMethods
     */
    public function setPaymentMethods(?array $paymentMethods): void
    {
        $this->paymentMethods = $paymentMethods;
    }

    /**
     * @return array|null
     */
    public function getNotifyUrl(): ?array
    {
        return $this->notifyUrl;
    }

    /**
     * @param array|null $notifyUrl
     */
    public function setNotifyUrl(?array $notifyUrl): void
    {
        $this->notifyUrl = $notifyUrl;
    }

    /**
     * @return array|null
     */
    public function getReturnUrl(): ?array
    {
        return $this->returnUrl;
    }

    /**
     * @param array|null $returnUrl
     */
    public function setReturnUrl(?array $returnUrl): void
    {
        $this->returnUrl = $returnUrl;
    }

    public function getMetaData(): ?array
    {
        return $this->metaData;
    }

    public function setMetaData(?array $metaData): void
    {
        $this->metaData = $metaData;
    }
}
