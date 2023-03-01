<?php

namespace Cybernerdie\LaravelTerminalAfrica\Contracts;

interface TerminalAfricaContract
{
    /**
     * Set the base URI for the API request
     */
    public function setBaseUri(): void;

    /**
     * Set the secret key for the API request
     */
    public function setSecret(): void;

    /**
     * Set the authorization header.
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
     */
    public function setClient(): void;

    /**
     * Make the actual API request
     */
    public function makeRequest(string $endpoint, string $method, array $queryParams = [], array $formParams = []): array;

    /**
     * Format the response from the API request
     */
    public function formatResponse(): mixed;
}
