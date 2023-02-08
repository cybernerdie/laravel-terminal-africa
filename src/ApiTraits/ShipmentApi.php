<?php

namespace Cybernerdie\LaravelTerminalAfrica\ApiTraits;

trait ShipmentApi
{
    /**
     * Endpoint for shipment API calls
     *
     * @var string
     */
    const SHIPMENT_ENDPOINT = 'shipments/';

    /**
     * This endpoint allows you to get a list of shipments available for a user.
     *
     * @return array
     */
    public function getShipments()
    {
        $endpoint = self::SHIPMENT_ENDPOINT;
        $method = 'GET';

        return $this->makeApiRequest($endpoint, $method);
    }


    /**
     * This endpoint allows you to retrieve details for a shipment.
     *
     * @param string $shipmentId
     * @return array
     */
    public function getShipment(string $shipmentId)
    {
        $endpoint = self::SHIPMENT_ENDPOINT . $shipmentId;
        $method = 'GET';

        return $this->makeApiRequest($endpoint, $method);
    }
}
