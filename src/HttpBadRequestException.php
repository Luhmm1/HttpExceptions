<?php

namespace Luhmm1\HttpExceptions;

class HttpBadRequestException extends AbstractHttpException
{
    protected string $httpMessage = 'Bad Request.';
    protected int $httpCode = 400;
}
