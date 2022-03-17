<?php

namespace Nekoding\GmoCreditcard\Exceptions;

use Exception;

class GMOErrorResponseException extends Exception
{

    public $errors = [];

    public function __construct(string $message, array $errors = [])
    {
        $this->errors = $errors;
        return parent::__construct($message);
    }

    public function getErrors()
    {
        return $this->errors;
    }

}