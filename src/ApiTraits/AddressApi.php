<?php

namespace Cybernerdie\LaravelTerminalAfrica\ApiTraits;

trait AddressApi
{
    /**
     * Endpoint for address API calls
     *
     * @var string
     */
    const ADDRESS_ENDPOINT = 'addresses/';

   /**
     * This endpoint allows you to get a list of all addresses available.
     *
     * @return array
     */
    public function getAddresses()
    {
        $endpoint = self::ADDRESS_ENDPOINT;
        $method = 'GET';

        return $this->makeApiRequest($endpoint, $method);
    }


    /**
     * This endpoint allows you to retrieve the details of a specific address.
     *
     * @param string $addressId
     * @return array
     */
    public function getAddress(string $addressId)
    {
        $endpoint = self::ADDRESS_ENDPOINT . $addressId;
        $method = 'GET';

        return $this->makeApiRequest($endpoint, $method);
    }
}
