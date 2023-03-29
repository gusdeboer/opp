<?php

declare(strict_types=1);

namespace Gusdeboer\OPP\Endpoints;

use Gusdeboer\OPP\OnlinePaymentPlatformApiClient;
use GuzzleHttp\Client;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

abstract readonly class AbstractEndpoint
{
    protected Serializer $serializer;
    protected Client $client;

    public function __construct(OnlinePaymentPlatformApiClient $onlinePaymentPlatformApiClient)
    {
        $encoders = [new JsonEncoder()];
        $normalizers = [new ObjectNormalizer()];

        $this->serializer = new Serializer($normalizers, $encoders);
        $this->client = $onlinePaymentPlatformApiClient->client;
    }
}
