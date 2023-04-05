<?php

declare(strict_types=1);

namespace Gusdeboer\OPP\Endpoints;

use Gusdeboer\OPP\OnlinePaymentPlatformApiClient;
use GuzzleHttp\Client;
use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

abstract readonly class AbstractEndpoint
{
    protected Serializer $serializer;
    protected Client $client;

    public function __construct(OnlinePaymentPlatformApiClient $onlinePaymentPlatformApiClient)
    {
        $normalizers = [
            new ObjectNormalizer(null, null, null, new ReflectionExtractor())
        ];
        $encoders = [new JsonEncoder()];

        $this->serializer = new Serializer($normalizers, $encoders);
        $this->client = $onlinePaymentPlatformApiClient->client;
    }
}
