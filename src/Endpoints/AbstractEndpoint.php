<?php

declare(strict_types=1);

namespace Gusdeboer\OPP\Endpoints;

use Doctrine\Common\Annotations\AnnotationReader;
use Gusdeboer\OPP\OnlinePaymentPlatformApiClient;
use GuzzleHttp\Client;
use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory;
use Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader;
use Symfony\Component\Serializer\NameConverter\CamelCaseToSnakeCaseNameConverter;
use Symfony\Component\Serializer\NameConverter\MetadataAwareNameConverter;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\BackedEnumNormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

abstract readonly class AbstractEndpoint
{
    protected Serializer $serializer;
    protected Client $client;

    public function __construct(OnlinePaymentPlatformApiClient $onlinePaymentPlatformApiClient)
    {
        $classMetadataFactory = new ClassMetadataFactory(new AnnotationLoader(new AnnotationReader()));

        $metadataAwareNameConverter = new MetadataAwareNameConverter($classMetadataFactory);

        $normalizers = [
            new BackedEnumNormalizer(),
            new ArrayDenormalizer(),
            new ObjectNormalizer(
                null,
                new CamelCaseToSnakeCaseNameConverter(),
                null,
                new ReflectionExtractor()
            ),
            new ObjectNormalizer(
                $classMetadataFactory,
                $metadataAwareNameConverter,
                null,
                new ReflectionExtractor()
            ),
        ];
        $encoders = [new JsonEncoder()];

        $this->serializer = new Serializer($normalizers, $encoders);
        $this->client = $onlinePaymentPlatformApiClient->client;
    }
}
