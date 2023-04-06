<?php

declare(strict_types=1);

namespace Gusdeboer\OPP\Endpoints;

use Gusdeboer\OPP\Resources\ResourceInterface;
use Gusdeboer\OPP\Resources\ResourceListInterface;

interface CrudEndpointInterface
{
    public function create(ResourceInterface $resource): ResourceInterface;

    public function retrieve(string $uid): ResourceInterface;

    /**
     * @param int $page
     * @param int $limit
     * @param array<string> $options
     * @return ResourceListInterface
     */
    public function list(int $page = 1, int $limit = 20, array $options = []): ResourceListInterface;

    public function update(ResourceInterface $resource): ResourceInterface;

    public function delete(string $uid): bool;
}
