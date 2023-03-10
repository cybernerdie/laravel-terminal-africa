<?php

namespace Cybernerdie\LaravelTerminalAfrica\Traits;

use Cybernerdie\LaravelTerminalAfrica\Constants\TerminalAfricaConstant;

trait CarrierApi
{
    /**
     * This method allows you to get a list of carriers available on TShip.
     */
    public function getCarriers(array $queryParams = []): array
    {
        $endpoint = sprintf('%s', TerminalAfricaConstant::CARRIER_ENDPOINT);

        return $this->makeRequest(
            method: 'GET',
            endpoint: $endpoint,
            queryParams: $queryParams
        );
    }

    /**
     * This method allows you to retrieve details of a specific carrier.
     */
    public function getCarrier(string $carrierId): array
    {
        $endpoint = sprintf('%s/%s', TerminalAfricaConstant::CARRIER_ENDPOINT, $carrierId);

        return $this->makeRequest(
            method: 'GET',
            endpoint: $endpoint
        );
    }

    /**
     * This method allows you to enable a carrier. One of domestic,
     * international or regional query parameters is required in request.
     */
    public function enableCarrier(string $carrierId, array $queryParams): array
    {
        $endpoint = sprintf('%s/enable/%s', TerminalAfricaConstant::CARRIER_ENDPOINT, $carrierId);

        return $this->makeRequest(
            method: 'POST',
            endpoint: $endpoint,
            queryParams: $queryParams
        );
    }

    /**
     * This method allows you to enable multiple carriers in a single call.
     */
    public function enableMultipleCarriers(array $formParams): array
    {
        $endpoint = sprintf('%s/multiple/enable', TerminalAfricaConstant::CARRIER_ENDPOINT);

        return $this->makeRequest(
            method: 'POST',
            endpoint: $endpoint,
            formParams: $formParams
        );
    }

    /**
     * This method allows you to disable a carrier.
     */
    public function disableCarrier(string $carrierId, array $queryParams): array
    {
        $endpoint = sprintf('%s/disable/%s', TerminalAfricaConstant::CARRIER_ENDPOINT, $carrierId);

        return $this->makeRequest(
            method: 'POST',
            endpoint: $endpoint,
            queryParams: $queryParams
        );
    }

    /**
     * This method allows you to disable multiple carriers in a single call.
     */
    public function disableMultipleCarriers(array $formParams): array
    {
        $endpoint = sprintf('%s/multiple/disable', TerminalAfricaConstant::CARRIER_ENDPOINT);

        return $this->makeRequest(
            method: 'POST',
            endpoint: $endpoint,
            formParams: $formParams
        );
    }
}
