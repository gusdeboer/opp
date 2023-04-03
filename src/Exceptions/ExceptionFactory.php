<?php

declare(strict_types=1);

namespace Gusdeboer\OPP\Exceptions;

use GuzzleHttp\Exception\RequestException;

final readonly class ExceptionFactory
{
    public static function createFromRequest(RequestException $exception): void
    {
        $statusCode = $exception->getCode();

        switch ($statusCode) {
            case 400:
                throw new BadRequestException();
            case 401:
                throw new UnauthorizedException();
            case 404:
                throw new NotFoundException();
            case 409:
                throw new ConflictException();
            case 500:
                // todo
                break;
        }
    }
}
