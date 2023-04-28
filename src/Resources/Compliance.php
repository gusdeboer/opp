<?php

namespace Gusdeboer\OPP\Resources;

use Gusdeboer\OPP\Types\ComplianceStatus;

final class Compliance
{
    private int $level;
    private ComplianceStatus $status;
    private ?string $overviewUrl;
    /** @var Requirement[] */
    public array $requirements;

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

    public function setStatus(ComplianceStatus $status): void
    {
        $this->status = $status;
    }

    public function getOverviewUrl(): ?string
    {
        return $this->overviewUrl;
    }

    public function setOverviewUrl(?string $overviewUrl): void
    {
        $this->overviewUrl = $overviewUrl;
    }

    /**
     * @return array<int, Requirement>
     */
    public function getRequirements(): array
    {
        return $this->requirements ?? [];
    }

    public function addRequirements(Requirement $requirement): void
    {
        $this->requirements[] = $requirement;
    }
}
