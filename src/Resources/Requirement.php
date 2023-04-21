<?php

namespace Gusdeboer\OPP\Resources;

use Gusdeboer\OPP\Types\ObjectType;

final class Requirement
{
    private string $type;
    private string $status;
    private ?string $objectUid;
    private string $objectType;
    private ?string $objectUrl;
    private string $objectRedirectUrl;

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    /**
     * @return string
     */
    public function getObjectUid(): ?string
    {
        return $this->objectUid;
    }

    /**
     * @param string|null $objectUid
     */
    public function setObjectUid(?string $objectUid): void
    {
        $this->objectUid = $objectUid;
    }

    /**
     * @return string
     */
    public function getObjectType(): string
    {
        return $this->objectType;
    }

    /**
     * @param string $objectType
     */
    public function setObjectType(string $objectType): void
    {
        $this->objectType = $objectType;
    }

    /**
     * @return string|null
     */
    public function getObjectUrl(): ?string
    {
        return $this->objectUrl;
    }

    /**
     * @param string $objectUrl
     */
    public function setObjectUrl(?string $objectUrl): void
    {
        $this->objectUrl = $objectUrl;
    }

    /**
     * @return string
     */
    public function getObjectRedirectUrl(): string
    {
        return $this->objectRedirectUrl;
    }

    /**
     * @param string $objectRedirectUrl
     */
    public function setObjectRedirectUrl(string $objectRedirectUrl): void
    {
        $this->objectRedirectUrl = $objectRedirectUrl;
    }

}
