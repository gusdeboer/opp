<?php

declare(strict_types=1);

namespace Gusdeboer\OPP\Endpoints;

use Assert\Assertion;
use Gusdeboer\OPP\Exceptions\BadRequestException;
use Gusdeboer\OPP\Exceptions\ExceptionFactory;
use Gusdeboer\OPP\Resources\Merchant;
use Gusdeboer\OPP\Resources\ResourceInterface;
use Gusdeboer\OPP\Resources\ResourceListInterface;
use Gusdeboer\OPP\Types\MerchantStatus;
use GuzzleHttp\Exception\RequestException;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;

readonly class MerchantEndpoint extends AbstractEndpoint implements CrudEndpointInterface
{
    public const ENDPOINT = 'merchants';

    /**
     * @param Merchant $resource
     */
    public function create(ResourceInterface $resource): Merchant
    {
        Assertion::isInstanceOf($resource, Merchant::class);

        $requestBody = $this->serializer->normalize(
            data: $resource,
            context: [AbstractNormalizer::ATTRIBUTES => [
                'type',
                'country',
                'locale',
                'firstName',
                'lastName',
                'isPep',
                'cocNr',
                'vatNr',
                'legalNames',
                'legalEntity',
                'tradingNames',
                'emailaddress',
                'phone',
                'settlementInterval',
                'notifyUrl',
                'returnUrl',
                'metaData',
                'addresses'
            ]]
        );

        $request = $this->client->request(
            'POST',
            self::ENDPOINT,
            ['json' => $requestBody]
        );

        return $this->serializer->deserialize($request->getBody()->getContents(), Merchant::class, 'json');
    }

    public function retrieve(string $uid): Merchant
    {
        $request = $this->client->request('GET', sprintf('%s/%s', self::ENDPOINT, $uid));

        return $this->serializer->deserialize($request->getBody()->getContents(), Merchant::class, 'json');
    }

    public function list(int $page = 1, int $limit = 20, array $options = []): ResourceListInterface
    {
        return [];
    }

    /**
     * @param Merchant $resource
     */
    public function updateStatus(ResourceInterface $resource): Merchant
    {
        Assertion::isInstanceOf($resource, Merchant::class);

        $requestBody = $this->serializer->normalize(
            data: $resource,
            context: [AbstractNormalizer::ATTRIBUTES => [
                'status',
            ]]
        );
        $request = $this->client->request(
            'POST',
            sprintf('%s/%s', self::ENDPOINT, $resource->getUid()),
            ['json' => $requestBody]
        );

        return $this->serializer->deserialize($request->getBody()->getContents(), Merchant::class, 'json');
    }

    /**
     * @param Merchant $resource
     */
    public function update(ResourceInterface $resource): Merchant
    {
        Assertion::isInstanceOf($resource, Merchant::class);

        $requestBody = $this->serializer->normalize(
            data: $resource,
            context: [AbstractNormalizer::ATTRIBUTES => [
                'emailaddress',
                'isPep',
                'notifyUrl',
                'returnUrl'
            ]]
        );

        $request = $this->client->request(
            'POST',
            sprintf('%s/%s', self::ENDPOINT, $resource->getUid()),
            ['json' => $requestBody]
        );

        return $this->serializer->deserialize($request->getBody()->getContents(), Merchant::class, 'json');
    }

    /**
     * @param Merchant $resource
     */
    public function delete(ResourceInterface $resource): bool
    {
        Assertion::isInstanceOf($resource, Merchant::class);

        if (!in_array($resource->getStatus(), [
            MerchantStatus::Suspended,
            MerchantStatus::Terminated
        ])) {
            throw new BadRequestException(sprintf(
                'When deleting a merchant the status must me set to %s or %s. Use $merchant->setStatus()',
                MerchantStatus::Suspended->value,
                MerchantStatus::Terminated->value
            ));
        }

        $requestBody = $this->serializer->normalize(
            data: $resource,
            context: [AbstractNormalizer::ATTRIBUTES => [
                'status',
            ]]
        );

        $request = $this->client->request(
            'POST',
            sprintf('%s/%s', self::ENDPOINT, $resource->getUid()),
            ['json' => $requestBody]
        );

        return true;
    }
}
