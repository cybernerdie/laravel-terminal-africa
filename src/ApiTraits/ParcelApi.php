<?php

namespace Cybernerdie\LaravelTerminalAfrica\ApiTraits;

trait ParcelApi
{
  /**
     * Endpoint for parcel API calls
     *
     * @var string
     */
    const PARCEL_ENDPOINT = 'parcels/';

    /**
     * This endpoint allows you to get a list of all parcels available for a user.
     *
     * @return array
     */
    public function getParcels()
    {
        $endpoint = self::PARCEL_ENDPOINT;
        $method = 'GET';

        return $this->makeApiRequest($endpoint, $method);
    }


    /**
     * This endpoint allows you to retrieve details of a specific parcel.
     *
     * @param string $parcelId
     * @return array
     */
    public function getParcel(string $parcelId)
    {
        $endpoint = self::PARCEL_ENDPOINT . $parcelId;
        $method = 'GET';

        return $this->makeApiRequest($endpoint, $method);
    }
}
