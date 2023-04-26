<?php

namespace Gusdeboer\OPP\Resources;

use Gusdeboer\OPP\Resources\Traits\ResourceTrait;
use Gusdeboer\OPP\Types\Country;
use Gusdeboer\OPP\Types\Locale;
use Gusdeboer\OPP\Types\MerchantStatus;
use Gusdeboer\OPP\Types\MerchantType;
use Gusdeboer\OPP\Types\ObjectType;
use Gusdeboer\OPP\Types\SettlementInterval;

final class Merchant implements ResourceInterface
{
    use ResourceTrait;

    private string $emailaddress;
    private MerchantStatus $status;
    private Compliance $compliance;
    private MerchantType $type;
    private ?string $cocNr;
    private ?string $legalEntity;
    /** @var array<int, string>|null  */
    private ?array $tradingNames;
    private bool $isPep;
    private ?SettlementInterval $settlementInterval;
    private ?string $firstName;
    private ?string $lastName;
    private ?string $name;
    private ?string $phone;
    private ?string $vatNr;
    private ?Country $country;
    private ?Locale $locale;
    private ?string $sector;
    /** @var Address[]|null  */
    private array $addresses;
    private ?array $contacts; // Contact
    private ?array $profiles; // Profile
    private ?array $paymentMethods; // PaymentMethod
    private ?string $notifyUrl;
    private ?string $returnUrl;

    /**
     * @var array<string, string>|null
     */
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

    public function getCocNr(): ?string
    {
        return $this->cocNr;
    }

    public function setCocNr(?string $cocNr): void
    {
        $this->cocNr = $cocNr;
    }

    public function getLegalEntity(): ?string
    {
        return $this->legalEntity;
    }

    public function setLegalEntity(?string $legalEntity): void
    {
        $this->legalEntity = $legalEntity;
    }

    /**
     * @return array<int, string>|null
     */
    public function getTradingNames(): ?array
    {
        return $this->tradingNames;
    }

    /**
     * @param array<int, string>|null $tradingNames
     */
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

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(?string $firstName): void
    {
        $this->firstName = $firstName;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(?string $lastName): void
    {
        $this->lastName = $lastName;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): void
    {
        $this->phone = $phone;
    }

    public function getVatNr(): ?string
    {
        return $this->vatNr;
    }

    public function setVatNr(?string $vatNr): void
    {
        $this->vatNr = $vatNr;
    }

    public function getCountry(): ?Country
    {
        return $this->country;
    }

    public function setCountry(?string $country): void
    {
        $this->country = $country ? Country::fromString($country) : null;
    }

    public function getLocale(): ?Locale
    {
        return $this->locale;
    }

    public function setLocale(?string $locale): void
    {
        $this->locale = $locale ? Locale::fromString($locale) : null;
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

    public function getAddresses(): array
    {
        return $this->addresses ?? [];
    }

    public function addAddresses(Address $address): void
    {
        $this->addresses[] = $address;
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

    /**
     * @return array<string, string>|null
     */
    public function getMetaData(): ?array
    {
        return $this->metaData;
    }

    /**
     * @param array<string, string>|null $metaData
     */
    public function setMetaData(?array $metaData): void
    {
        $this->metaData = $metaData;
    }

    /**
     * @return bool
     */
    public function getIsPep(): bool
    {
        return $this->isPep;
    }

    /**
     * @param bool $isPep
     */
    public function setIsPep(bool $isPep): void
    {
        $this->isPep = $isPep;
    }

    /**
     * @return SettlementInterval|null
     */
    public function getSettlementInterval(): ?SettlementInterval
    {
        return $this->settlementInterval;
    }

    /**
     * @param string|null $settlementInterval
     */
    public function setSettlementInterval(?string $settlementInterval): void
    {
        $this->settlementInterval = $settlementInterval ? SettlementInterval::fromString($settlementInterval) : null;
    }

}
