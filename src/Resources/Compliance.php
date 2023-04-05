<?php

namespace Gusdeboer\OPP\Resources;

use Gusdeboer\OPP\Types\ComplianceStatus;

final class Compliance
{
    private ?int $level;
    private ComplianceStatus $status;
    private ?string $overviewUrl;
    private ?array $requirements;

    /**
     * @return int|null
     */
    public function getLevel(): ?int
    {
        return $this->level;
    }

    /**
     * @param int|null $level
     */
    public function setLevel(?int $level): void
    {
        $this->level = $level;
    }

    /**
     * @return ComplianceStatus
     */
    public function getStatus(): ComplianceStatus
    {
        return $this->status;
    }

    /**
     * @param ComplianceStatus $status
     */
    public function setStatus(ComplianceStatus $status): void
    {
        $this->status = $status;
    }

    /**
     * @return string|null
     */
    public function getOverviewUrl(): ?string
    {
        return $this->overviewUrl;
    }

    /**
     * @param string|null $overviewUrl
     */
    public function setOverviewUrl(?string $overviewUrl): void
    {
        $this->overviewUrl = $overviewUrl;
    }

    /**
     * @return array|null
     */
    public function getRequirements(): ?array
    {
        return $this->requirements;
    }

    /**
     * @param array|null $requirements
     */
    public function setRequirements(?array $requirements): void
    {
        $this->requirements = $requirements;
    }
}
