<?php

namespace Luhmm1\HttpExceptions;

class HttpInternalServerErrorException extends AbstractHttpException
{
    protected string $httpMessage = 'Internal Server Error.';
    protected int $httpCode = 500;
}
