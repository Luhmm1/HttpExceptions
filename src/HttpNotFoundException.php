<?php

namespace Luhmm1\HttpExceptions;

class HttpNotFoundException extends AbstractHttpException
{
    protected string $httpMessage = 'Not Found.';
    protected int $httpCode = 404;
}
