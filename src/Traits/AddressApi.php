<?php

namespace Cybernerdie\LaravelTerminalAfrica\Traits;

use Cybernerdie\LaravelTerminalAfrica\Constants\TerminalAfricaConstant;

trait AddressApi
{
    /**
     * This method allows you to get a list of all addresses available.
     */
    public function getAddresses(array $queryParams = []): array
    {
        $endpoint = sprintf('%s', TerminalAfricaConstant::ADDRESS_ENDPOINT);

        return $this->makeRequest(
            method: 'GET',
            endpoint: $endpoint,
            queryParams: $queryParams
        );
    }

    /**
     * This method allows you to retrieve the details of a specific address.
     */
    public function getAddress(string $addressId): array
    {
        $endpoint = sprintf('%s/%s', TerminalAfricaConstant::ADDRESS_ENDPOINT, $addressId);

        return $this->makeRequest(
            method: 'GET',
            endpoint: $endpoint
        );
    }

    /**
     * This method allows you create an address for getting rates or arranging pickup and delivery.
     */
    public function createAddress(array $formParams): array
    {
        $endpoint = sprintf('%s', TerminalAfricaConstant::ADDRESS_ENDPOINT);

        return $this->makeRequest(
            method: 'POST',
            endpoint: $endpoint,
            formParams: $formParams
        );
    }

    /**
     * This method allows you to update an address for getting rates or arranging pickup and delivery.
     */
    public function updateAddress(string $addressId, array $formParams): array
    {
        $endpoint = sprintf('%s/%s', TerminalAfricaConstant::ADDRESS_ENDPOINT, $addressId);

        return $this->makeRequest(
            method: 'PUT',
            endpoint: $endpoint,
            formParams: $formParams
        );
    }

    /**
     * This method allows you to validate the details of any global address.
     */
    public function validateAddress(array $formParams): array
    {
        $endpoint = sprintf('%s/validate', TerminalAfricaConstant::ADDRESS_ENDPOINT);

        return $this->makeRequest(
            method: 'POST',
            endpoint: $endpoint,
            formParams: $formParams
        );
    }

    /**
     * This method allows you to set an address as a default sender
     */
    public function setDefaultAddress(array $formParams): array
    {
        $endpoint = sprintf('%s/default/sender', TerminalAfricaConstant::ADDRESS_ENDPOINT);

        return $this->makeRequest(
            method: 'POST',
            endpoint: $endpoint,
            formParams: $formParams
        );
    }

    /**
     * This method allows you to get the sender default address
     */
    public function getDefaultAddress(): array
    {
        $endpoint = sprintf('%s/default/sender', TerminalAfricaConstant::ADDRESS_ENDPOINT);

        return $this->makeRequest(
            method: 'POST',
            endpoint: $endpoint
        );
    }
}
