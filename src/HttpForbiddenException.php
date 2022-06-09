<?php

namespace Luhmm1\HttpExceptions;

class HttpForbiddenException extends AbstractHttpException
{
    protected string $httpMessage = 'Forbidden.';
    protected int $httpCode = 403;
}
