<?php

declare(strict_types=1);

namespace Gusdeboer\OPP\Endpoints;

use Assert\Assertion;
use Gusdeboer\OPP\Exceptions\ExceptionFactory;
use Gusdeboer\OPP\Resources\Merchant;
use Gusdeboer\OPP\Resources\ResourceInterface;
use Gusdeboer\OPP\Resources\ResourceListInterface;

readonly class MerchantEndpoint extends AbstractEndpoint implements CrudEndpointInterface
{
    public const ENDPOINT = 'merchants';

    public function create(ResourceInterface $resource): Merchant
    {
        Assertion::isInstanceOf($resource, Merchant::class, '$resouce must me a merchant');

        $requestBody = $this->serializer->normalize($resource);

        $request = $this->client->request('POST', self::ENDPOINT, [
            'form_params' => [
                $requestBody
            ]
        ]);

        return $this->serializer->deserialize($request->getBody()->getContents(), Merchant::class, 'json');
    }

    public function retrieve(string $uid): Merchant
    {
        $request = $this->client->request('GET', sprintf('%s/%s', self::ENDPOINT, $uid));

        if ($request->getStatusCode() !== 200) {
            //ExceptionFactory::createFromRequest();
        }

        return $this->serializer->deserialize($request->getBody()->getContents(), Merchant::class, 'json');
    }

    public function list(int $page = 1, int $limit = 20, array $options = []): ResourceListInterface
    {
        return [];
    }

    public function update(string $uid, ResourceInterface $resource): Merchant
    {
        Assertion::isInstanceOf($resource, Merchant::class);
    }

    public function delete(string $uid): bool
    {
        return true;
    }
}
