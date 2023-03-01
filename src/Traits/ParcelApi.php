<?php

namespace Cybernerdie\LaravelTerminalAfrica\Traits;

use Cybernerdie\LaravelTerminalAfrica\Constants\TerminalAfricaConstant;

trait ParcelApi
{
    /**
     * This method allows you to create a new parcel for a shipment.
     */
    public function createParcel(array $formParams): array
    {
        $endpoint = sprintf('%s', TerminalAfricaConstant::PARCEL_ENDPOINT);

        return $this->makeRequest(
            method: 'POST',
            endpoint: $endpoint,
            formParams: $formParams
        );
    }

    /**
     * This method allows you to retrieve a list of packaging available for a user.
     */
    public function getParcels(array $queryParams = []): array
    {
        $endpoint = sprintf('%s', TerminalAfricaConstant::PARCEL_ENDPOINT);

        return $this->makeRequest(
            method: 'GET',
            endpoint: $endpoint,
            queryParams: $queryParams
        );
    }

    /**
     * This method allows you to retrieve details of a specific parcel.
     */
    public function getParcel(string $parcelId): array
    {
        $endpoint = sprintf('%s/%s', TerminalAfricaConstant::PARCEL_ENDPOINT, $parcelId);

        return $this->makeRequest(
            method: 'GET',
            endpoint: $endpoint
        );
    }

    /**
     * This method allows you to update an existing parcel.
     */
    public function updateParcel(string $parcelId, array $formParams): array
    {
        $endpoint = sprintf('%s/%s', TerminalAfricaConstant::PARCEL_ENDPOINT, $parcelId);

        return $this->makeRequest(
            method: 'PUT',
            endpoint: $endpoint,
            formParams: $formParams
        );
    }
}
