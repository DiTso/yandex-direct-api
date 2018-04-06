<?php

namespace directapi\exceptions;


class DirectAccountNotExistException extends DirectApiException
{
    public $error_detail;

    public function __construct($message = "", $code = 0, \Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}