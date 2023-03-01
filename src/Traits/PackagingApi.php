<?php

namespace Cybernerdie\LaravelTerminalAfrica\Traits;

use Cybernerdie\LaravelTerminalAfrica\Constants\TerminalAfricaConstant;

trait PackagingApi
{
    /**
     * This method allows you to add new packaging.
     */
    public function createPackaging(array $formParams): array
    {
        $endpoint = sprintf('%s', TerminalAfricaConstant::PACKAGING_ENDPOINT);

        return $this->makeRequest(
            method: 'POST',
            endpoint: $endpoint,
            formParams: $formParams
        );
    }

    /**
     * This method allows you to retrieve a list of packaging available for a user.
     */
    public function getPackagingList(array $queryParams = []): array
    {
        $endpoint = sprintf('%s', TerminalAfricaConstant::PACKAGING_ENDPOINT);

        return $this->makeRequest(
            method: 'GET',
            endpoint: $endpoint,
            queryParams: $queryParams
        );
    }

    /**
     * This method allows you to retrieve details of a specific packaging.
     */
    public function getPackaging(string $packagingId): array
    {
        $endpoint = sprintf('%s/%s', TerminalAfricaConstant::PACKAGING_ENDPOINT, $packagingId);

        return $this->makeRequest(
            method: 'GET',
            endpoint: $endpoint
        );
    }

    /**
     * This method allows you to update an existing packaging.
     */
    public function updatePackaging(string $packagingId, array $formParams): array
    {
        $endpoint = sprintf('%s/%s', TerminalAfricaConstant::PACKAGING_ENDPOINT, $packagingId);

        return $this->makeRequest(
            method: 'PUT',
            endpoint: $endpoint,
            formParams: $formParams
        );
    }
}
