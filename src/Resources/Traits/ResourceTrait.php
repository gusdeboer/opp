<?php

namespace Gusdeboer\OPP\Resources\Traits;

use Gusdeboer\OPP\Types\ObjectType;

trait ResourceTrait
{
    private string $uid;
    private ObjectType $object;

    private \DateTimeImmutable $created;
    private \DateTimeImmutable $updated;

    /**
     * @return string
     */
    public function getUid(): string
    {
        return $this->uid;
    }

    /**
     * @param string $uid
     */
    public function setUid(string $uid): void
    {
        $this->uid = $uid;
    }

    /**
     * @return ObjectType
     */
    public function getObject(): ObjectType
    {
        return $this->object;
    }

    /**
     * @param string $object
     */
    public function setObject(string $object): void
    {
        $this->object = ObjectType::fromString($object);
    }

    /**
     * @return int
     */
    public function getCreated(): \DateTimeImmutable
    {
        return $this->created;
    }

    /**
     * @param int $created
     */
    public function setCreated(int $created): void
    {
        $dateTime = new \DateTimeImmutable();
        $this->created = $dateTime->setTimestamp($created);
    }

    /**
     * @return int
     */
    public function getUpdated(): \DateTimeImmutable
    {
        return $this->updated;
    }

    /**
     * @param int $updated
     */
    public function setUpdated(int $updated): void
    {
        $dateTime = new \DateTimeImmutable();
        $this->updated = $dateTime->setTimestamp($updated);
    }
}
