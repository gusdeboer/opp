<?php

namespace Gusdeboer\OPP\Resources;

use Gusdeboer\OPP\Resources\Traits\ResourceTrait;
use Gusdeboer\OPP\Types\AddressType;
use Gusdeboer\OPP\Types\Country;
use Gusdeboer\OPP\Types\ObjectType;
use Symfony\Component\Serializer\Annotation\SerializedName;

final class Address
{
    use ResourceTrait;

    private \DateTimeImmutable $verified;
    private AddressType $type;
    #[SerializedName('address_line_1')]
    private ?string $addressLine1;
    #[SerializedName('address_line_2')]
    private ?string $addressLine2;
    private ?string $zipcode;
    private ?string $city;
    private ?Country $country;

    /**
     * @return \DateTimeImmutable
     */
    public function getVerified(): \DateTimeImmutable
    {
        return $this->verified;
    }

    /**
     * @param int $verified
     */
    public function setVerified(int $verified): void
    {
        $dateTime = new \DateTimeImmutable();
        $this->verified = $dateTime->setTimestamp($verified);
    }

    /**
     * @return AddressType
     */
    public function getType(): AddressType
    {
        return $this->type;
    }

    /**
     * @param AddressType $type
     */
    public function setType(AddressType $type): void
    {
        $this->type = $type;
    }

    /**
     * @return string|null
     */
    public function getAddressLine1(): ?string
    {
        return $this->addressLine1;
    }

    /**
     * @param string|null $addressLine1
     */
    public function setAddressLine1(?string $addressLine1): void
    {
        $this->addressLine1 = $addressLine1;
    }

    /**
     * @return string|null
     */
    public function getAddressLine2(): ?string
    {
        return $this->addressLine2;
    }

    /**
     * @param string|null $addressLine2
     */
    public function setAddressLine2(?string $addressLine2): void
    {
        $this->addressLine2 = $addressLine2;
    }

    /**
     * @return string|null
     */
    public function getZipcode(): ?string
    {
        return $this->zipcode;
    }

    /**
     * @param string|null $zipcode
     */
    public function setZipcode(?string $zipcode): void
    {
        $this->zipcode = $zipcode;
    }

    /**
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * @param string|null $city
     */
    public function setCity(?string $city): void
    {
        $this->city = $city;
    }

    /**
     * @return Country|null
     */
    public function getCountry(): ?Country
    {
        return $this->country;
    }

    /**
     * @param string|null $country
     */
    public function setCountry(?string $country): void
    {
        $this->country = $country ? Country::fromString($country) : null;
    }
}
