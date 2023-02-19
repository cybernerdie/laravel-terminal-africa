<?php

namespace Cybernerdie\LaravelTerminalAfrica\Traits;

trait AddressTrait
{
    /**
     * Endpoint for address API calls
     *
     * @var string
     */
    const ADDRESS_ENDPOINT = '/addresses/';

    /**
     * This method allows you to get a list of all addresses available.
     *
     * @param  array $queryParams
     *
     * @return array
     */
    public function getAddresses(array $queryParams = []): array
    {
        $endpoint = sprintf('%s', self::ADDRESS_ENDPOINT);

        return $this->makeRequest(
            method: 'GET',
            endpoint: $endpoint,
            queryParams: $queryParams
        );
    }

    /**
     * This method allows you to retrieve the details of a specific address.
     *
     * @param string $addressId
     *
     * @return array
     */
    public function getAddress(string $addressId): array
    {
        $endpoint = sprintf('%s%s', self::ADDRESS_ENDPOINT, $addressId);

        return $this->makeRequest(
            method: 'GET',
            endpoint: $endpoint
        );
    }

    /**
     * This method allows you create an address for getting rates or arranging pickup and delivery.
     *
     * @param  array $formParams
     *
     * @return array
     */
    public function createAddress(array $formParams): array
    {
        $endpoint = sprintf('%s', self::ADDRESS_ENDPOINT);

        return $this->makeRequest(
            method: 'POST',
            endpoint: $endpoint,
            formParams: $formParams
        );
    }

    /**
     * This method allows you to update an address for getting rates or arranging pickup and delivery.
     *
     * @param  array $formParams
     *
     * @return array
     */
    public function updateAddress(string $addressId, array $formParams): array
    {
        $endpoint = sprintf('%s%s', self::ADDRESS_ENDPOINT, $addressId);

        return $this->makeRequest(
            method: 'PUT',
            endpoint: $endpoint,
            formParams: $formParams
        );
    }

    /**
     * This method allows you to validate the details of any global address.
     *
     * @param  array $formParams
     *
     * @return array
     */
    public function validateAddress(array $formParams): array
    {
        $endpoint = sprintf('%svalidate', self::ADDRESS_ENDPOINT);

        return $this->makeRequest(
            method: 'POST',
            endpoint: $endpoint,
            formParams: $formParams
        );
    }
}
