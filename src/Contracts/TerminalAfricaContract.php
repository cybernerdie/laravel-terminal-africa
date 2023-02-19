<?php

namespace Cybernerdie\LaravelTerminalAfrica\Contracts;

interface TerminalAfricaContract
{
    /**
     * Set the base URI for the API request
     *
     * @return void
     */
    public function setBaseUri(): void;

    /**
     * Set the secret key for the API request
     *
     * @return void
     */
    public function setSecret(): void;

    /**
     * Set the authorization header.
     *
     * @return string
     */
    public function setAuthorizationHeader(): string;

    /**
     * Get the client headers.
     *
     * @return array The headers for the client.
     */
    public function getClientHeaders(): array;

    /**
     * Set the client.
     *
     * @return void
     */
    public function setClient(): void;

    /**
     * Make the actual API request
     *
     * @param string $endpoint
     * @param string $method
     * @param array $queryParams
     * @param array $formParams
     * @return array
     */
    public function makeRequest(string $endpoint, string $method, array $queryParams = [], array $formParams = []): array;

    /**
     * Format the response from the API request
     *
     * @return mixed
     */
    public function formatResponse(): mixed;
}

