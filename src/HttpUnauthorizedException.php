<?php

namespace Luhmm1\HttpExceptions;

class HttpUnauthorizedException extends AbstractHttpException
{
    protected string $httpMessage = 'Unauthorized.';
    protected int $httpCode = 401;
}
