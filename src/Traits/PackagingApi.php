<?php

namespace Cybernerdie\LaravelTerminalAfrica\Traits;

trait PackagingApi
{
    /**
     * Endpoint for packaging API calls
     *
     * @var string
     */
    const PACKAGING_ENDPOINT = '/packaging';

    /**
     * This method allows you to add new packaging.
     *
     * @param  array $formParams
     *
     * @return array
     */
    public function createPackaging(array $formParams): array
    {
        $endpoint = sprintf('%s', self::PACKAGING_ENDPOINT);

        return $this->makeRequest(
            method: 'POST',
            endpoint: $endpoint,
            formParams: $formParams
        );
    }

    /**
     * This method allows you to retrieve a list of packaging available for a user.
     *
     * @param  array $queryParams
     *
     * @return array
     */
    public function getPackagingList(array $queryParams = []): array
    {
        $endpoint = sprintf('%s', self::PACKAGING_ENDPOINT);

        return $this->makeRequest(
            method: 'GET',
            endpoint: $endpoint,
            queryParams: $queryParams
        );
    }

    /**
     * This method allows you to retrieve details of a specific packaging.
     *
     * @param string $packagingId
     *
     * @return array
     */
    public function getPackaging(string $packagingId): array
    {
        $endpoint = sprintf('%s/%s', self::PACKAGING_ENDPOINT, $packagingId);

        return $this->makeRequest(
            method: 'GET',
            endpoint: $endpoint
        );
    }

    /**
     * This method allows you to update an existing packaging.
     *
     * @param array $formParams
     *
     * @return array
     */
    public function updatePackaging(string $packagingId, array $formParams): array
    {
        $endpoint = sprintf('%s/%s', self::PACKAGING_ENDPOINT, $packagingId);

        return $this->makeRequest(
            method: 'PUT',
            endpoint: $endpoint,
            formParams: $formParams
        );
    }
}
