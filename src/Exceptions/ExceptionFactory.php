<?php

declare(strict_types=1);

namespace Gusdeboer\OPP\Exceptions;

use GuzzleHttp\Exception\RequestException;

final readonly class ExceptionFactory
{
    public static function createFromRequest(RequestException $exception): \Exception
    {
        $statusCode = $exception->getCode();

        switch ($statusCode) {
            case 400:
                throw new BadRequestException();
                break;

            case 401:
                throw new UnauthorizedException();
                break;

            case 404:
                throw new NotFoundException();
                break;

            case 409:
                throw new ConflictException();
                break;

            case 500:
                // todo
                break;

            default:
                break;
        }
    }
}
