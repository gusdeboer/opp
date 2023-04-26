# Online Payment Platform API client

An API client designed to interface with the Online Payment Platform REST API. 

## Requirements

To use the Open Payment Platform API client, the following things are required:

- An account on [Online Payment Platform](https://onlinepaymentplatform.com/)
- PHP >= 8.2

## Installation

Installing the `Online Payment Platform API client` can be done by using `composer`

```shell
$ composer require gusdeboer/opp
```

## Getting started

```php
use Gusdeboer\OPP\OnlinePaymentPlatformApiClient;

public function index(): void
{
    // Setup client with your API key
    $client = new OnlinePaymentPlatformApiClient('apikey');
    
    // Retrieve a merchant
    $merchant = $client->merchants->retrieve('merchant_uid'); 
}
```

Need more? [Check out the examples](./examples/README.md)

## Debugging

If you are setting up you environment it's good practice to test your application in the Open Payment Platform Sandbox

```php
use Gusdeboer\OPP\OnlinePaymentPlatformApiClient;

$client = new OnlinePaymentPlatformApiClient(
    'apikey',
    OnlinePaymentPlatformApiClient::ENVIRONMENT_SANDBOX
);
```

## API Documentation

If you wish to learn more about the API, please visit the [Online Payment Platform Docs](https://docs.onlinepaymentplatform.com/#introduction). API Documentation is available in English.

## Contribute

Please read the [Contribute.md](CONTRIBUTE.md)

### Contributers

- [Gus de Boer](https://github.com/gusdeboer)
- You?

## TODO

- [ ] Endpoints
  - [ ] Merchant
    - [ ] Address
    - [ ] Bank Account
    - [ ] Contact
    - [ ] Profile
    - [ ] UBO
    - [ ] Compliance
    - [ ] Ticket
  - [ ] Files
  - [ ] Transactions
  - [ ] Mandates & Direct Debit
  - [ ] Charges
  - [ ] Withdrawals
  - [ ] Virtual IBAN
  - [ ] Issuer
  - [ ] Disputes
  - [ ] Mandates
- [ ] Group properties per endpoint call, [docs](https://symfony.com/doc/current/components/serializer.html#attributes-groups)