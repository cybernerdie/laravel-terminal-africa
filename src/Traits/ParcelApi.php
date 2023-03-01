<?php

namespace Cybernerdie\LaravelTerminalAfrica\Traits;

trait ParcelApi
{
    /**
     * Endpoint for parcel API calls
     *
     * @var string
     */
    const PARCEL_ENDPOINT = '/parcels';

    /**
     * This method allows you to create a new parcel for a shipment.
     *
     * @param  array $formParams
     *
     * @return array
     */
    public function createParcel(array $formParams): array
    {
        $endpoint = sprintf('%s', self::PARCEL_ENDPOINT);

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
    public function getParcels(array $queryParams = []): array
    {
        $endpoint = sprintf('%s', self::PARCEL_ENDPOINT);

        return $this->makeRequest(
            method: 'GET',
            endpoint: $endpoint,
            queryParams: $queryParams
        );
    }

    /**
     * This method allows you to retrieve details of a specific parcel.
     *
     * @param string $parcelId
     *
     * @return array
     */
    public function getParcel(string $parcelId): array
    {
        $endpoint = sprintf('%s/%s', self::PARCEL_ENDPOINT, $parcelId);

        return $this->makeRequest(
            method: 'GET',
            endpoint: $endpoint
        );
    }

    /**
     * This method allows you to update an existing parcel.
     *
     * @param array $formParams
     *
     * @return array
     */
    public function updateParcel(string $parcelId, array $formParams): array
    {
        $endpoint = sprintf('%s/%s', self::PARCEL_ENDPOINT, $parcelId);

        return $this->makeRequest(
            method: 'PUT',
            endpoint: $endpoint,
            formParams: $formParams
        );
    }
}
