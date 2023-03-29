<?php

declare(strict_types=1);

namespace Gusdeboer\OPP;

use Gusdeboer\OPP\Endpoints\MerchantEndpoint;
use GuzzleHttp\Client;

final readonly class OnlinePaymentPlatformApiClient
{
    const API_DOMAIN = 'onlinebetaalplatform.nl';
    const API_VERSION = 'v1';
    const ENVIRONMENT_SANDBOX = 'api-sandbox';
    const ENVIRONMENT_PRODUCTION = 'api';

    public Client $client;

    public MerchantEndpoint $merchants;

    public function __construct(
        private string $token,
        private string $environment = self::ENVIRONMENT_PRODUCTION,
        private string $version = self::API_VERSION
    )
    {
        $this->client = new Client([
            'base_uri' => sprintf(
                'https://%s.%s/%s/',
                $this->environment,
                self::API_DOMAIN,
                $this->version
            ),
            'headers' => [
                'Authorization' => $this->token
            ]
        ]);

        $this->merchants = new MerchantEndpoint($this);
    }
}