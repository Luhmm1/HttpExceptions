<?php

namespace Luhmm1\HttpExceptions;

class HttpMethodNotAllowedException extends AbstractHttpException
{
    protected string $httpMessage = 'Method Not Allowed.';
    protected int $httpCode = 405;
}
