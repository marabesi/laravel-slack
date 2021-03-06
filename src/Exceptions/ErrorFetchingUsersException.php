<?php

namespace SlackMessage\Exceptions;

use Exception;
use Throwable;

class ErrorFetchingUsersException extends Exception
{

    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct(sprintf('Something wen wrong trying to fetch users list: %s', $message), $code, $previous);
    }
}
