<?php

declare(strict_types=1);

namespace Gusdeboer\OPP\Exceptions;

use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\RequestException;

final readonly class ExceptionFactory
{
    public static function createFromRequest(RequestException $exception, string $resource): void
    {
        $statusCode = $exception->getCode();
        $message = self::parseMessage($exception, $resource);
        switch ($statusCode) {
            case 400:
                throw new BadRequestException(
                    $message,
                    $exception->getCode()
                );
            case 401:

                throw new UnauthorizedException(
                    $message,
                    $exception->getCode()
                );
            case 404:
                throw new NotFoundException(
                    $message,
                    $exception->getCode()
                );
            case 409:
                throw new ConflictException(
                    $message,
                    $exception->getCode()
                );
            case 500:
                // todo
                break;
        }
    }

    private static function parseMessage(ClientException $exception, string $resource):string
    {
        $content = json_decode($exception->getResponse()->getBody()->getContents());
        dd($resource);
        return sprintf(
            'Error %d %s: %s',
            $exception->getCode(),
            $exception->getResponse()->getReasonPhrase(),
            $content->error->message
        );
    }
}
