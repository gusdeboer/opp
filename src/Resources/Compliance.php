<?php

namespace Gusdeboer\OPP\Resources;

use Gusdeboer\OPP\Types\ComplianceStatus;

final class Compliance
{
    private int $level;
    private ComplianceStatus $status;
    private ?string $overviewUrl;
    private ?array $requirements;

    public function getLevel(): int
    {
        return $this->level;
    }

    public function setLevel(int $level): void
    {
        $this->level = $level;
    }

    public function getStatus(): ComplianceStatus
    {
        return $this->status;
    }

    public function setStatus(string $status): void
    {
        $this->status = ComplianceStatus::fromString($status);
    }

    public function getOverviewUrl(): ?string
    {
        return $this->overviewUrl;
    }

    public function setOverviewUrl(?string $overviewUrl): void
    {
        $this->overviewUrl = $overviewUrl;
    }

    public function getRequirements(): ?array
    {
        return $this->requirements;
    }

    public function setRequirements(?array $requirements): void
    {
        $this->requirements = $requirements;
    }
}
