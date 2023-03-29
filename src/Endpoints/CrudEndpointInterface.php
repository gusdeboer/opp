<?php

declare(strict_types=1);

namespace Gusdeboer\OPP\Endpoints;

use Gusdeboer\OPP\Resources\ResourceInterface;

interface CrudEndpointInterface
{
    public function create(ResourceInterface $resource): ResourceInterface;
    public function retrieve(string $uid): ResourceInterface;
    public function list(int $page = 1, int $limit = 20, array $options = []): array;
    public function update(string $uid, ResourceInterface $resource): ResourceInterface;
    public function delete(string $uid): bool;
}