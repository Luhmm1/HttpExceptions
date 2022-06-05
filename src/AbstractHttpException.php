<?php

namespace Luhmm1\HttpExceptions;

use Exception;
use Throwable;

abstract class AbstractHttpException extends Exception
{
    protected string $httpMessage;
    protected int $httpCode;

    public function __construct(string $message = '', ?Throwable $previous = null)
    {
        if ($message === '') {
            $message = $this->httpMessage;
        }

        parent::__construct($message, $this->httpCode, $previous);
    }
}
