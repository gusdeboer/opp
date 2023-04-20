<?php

namespace Gusdeboer\OPP\Resources;

use Gusdeboer\OPP\Resources\Traits\ResourceTrait;
use Gusdeboer\OPP\Types\CountryType;
use Gusdeboer\OPP\Types\MerchantStatus;
use Gusdeboer\OPP\Types\MerchantType;
use Gusdeboer\OPP\Types\ObjectType;

final class Merchant implements ResourceInterface
{
    use ResourceTrait;

    private string $emailaddress;
    private MerchantStatus $status;
    private Compliance $compliance;
    private MerchantType $type;
    private ?string $cocNr;
    private ?array $legalEntity; // LegalEntity
    private ?array $tradingNames;
    private ?string $name;
    private ?string $phone;
    private ?string $vatNr;
    private ?CountryType $country;
    private ?string $sector;
    private ?array $addresses; // Address
    private ?array $contacts; // Contact
    private ?array $profiles; // Profile
    private ?array $paymentMethods; // PaymentMethod
    private ?string $notifyUrl;
    public ?string $returnUrl;

    private ?array $metaData;

    public function __construct()
    {
    }

    public function getEmailaddress(): string
    {
        return $this->emailaddress;
    }

    public function setEmailaddress(string $emailAddress): void
    {
        $this->emailaddress = $emailAddress;
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

    public function getCountry(): ?CountryType
    {
        return $this->country;
    }

    public function setCountry(?string $country): void
    {
        $this->country = $country ? CountryType::fromString($country) : null;
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
     * @return string|null
     */
    public function getNotifyUrl(): ?string
    {
        return $this->notifyUrl;
    }

    /**
     * @param string|null $notifyUrl
     */
    public function setNotifyUrl(?string $notifyUrl): void
    {
        $this->notifyUrl = $notifyUrl;
    }

    /**
     * @return string|null
     */
    public function getReturnUrl(): ?string
    {
        return $this->returnUrl;
    }

    /**
     * @param string|null $returnUrl
     */
    public function setReturnUrl(?string $returnUrl): void
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
