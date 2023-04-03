<?php

declare(strict_types=1);

namespace Gusdeboer\OPP\Endpoints;

use Assert\Assertion;
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
    }

    public function retrieve(string $uid): Merchant
    {
        $request = $this->client->request('GET', self::ENDPOINT);

        if ($request->getStatusCode() !== 200) {
        }

        $json = '{
    "uid": "adkghaognkgksnfg",
    "object": "merchant",
    "created": 1554113700,
    "updated": 1554113700,
    "status": "pending",
    "compliance": {
        "level": 100,
        "status": "verified",
        "overview_url": "https://sandbox.onlinebetaalplatform.nl/nl/{{slug}}/{{merchant_uid}}/{{hash}}/overzicht",
        "requirements": []
    },
    "type": "consumer",
    "coc_nr": null,
    "name": "John Tester",
    "phone": "31601234567",
    "vat_nr": null,
    "country": "nld",
    "sector": null,
    "addresses": [],
    "trading_names": [],
    "contacts": [],
    "profiles": [],
    "payment_methods": [],
    "notify_url": "https://platform.com/notify",
    "return_url": "https://platform.com/return",
    "metadata": []
}';

        return $this->serializer->deserialize($json, Merchant::class, 'json');
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
