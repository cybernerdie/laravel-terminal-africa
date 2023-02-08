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
    public static function apiRequestError($message)
    {
        return new static("An error occurred while making the API request: {$message}");
    }

    /**
    * Throws an exception when the base URI for the API request is not set.
    *
    * @return TerminalAfricaException
    */
    public static function baseUriNotSet()
    {
        return new static("The base URI for the API request is not set. Please ensure that the `base_uri` config key is set correctly.");
    }

    /**
    * Throws an exception when the secret key for the API request is not set.
    *
    * @return TerminalAfricaException
    */
    public static function secretKeyNotSet()
    {
        return new static("The secret key for the API request is not set. Please ensure that the `secret` config key is set correctly.");
    }
}
