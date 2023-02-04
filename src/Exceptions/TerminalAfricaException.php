<?php

namespace Cybernerdie\LaravelTerminalAfrica\Exceptions;

use Exception;

class TerminalAfricaException extends Exception
{

    /**
     * TerminalAfricaException for API request errors.
     *
     * @param string $message
     * @param int $code
     * @return TerminalAfricaException
     */
    public static function apiRequestError($message, $code = 0)
    {
        return new static("An error occurred while making the API request: ".$message, $code);
    }
}
