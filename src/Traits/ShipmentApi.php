<?php

namespace Cybernerdie\LaravelTerminalAfrica\Traits;

trait ShipmentApi
{
    /**
     * Endpoint for shipment API calls
     *
     * @var string
     */
    const SHIPMENT_ENDPOINT = '/shipments';

    /**
     * This method allows you to get a list of shipments available for a user.
     *
     * @return array
     */
    public function getShipments(): array
    {
        $endpoint = sprintf('%s', self::SHIPMENT_ENDPOINT);

        return $this->makeRequest(
            method: 'GET',
            endpoint: $endpoint
        );
    }

    /**
     * This method allows you to retrieve details for a shipment.
     *
     * @param string $shipmentId
     * @return array
     */
    public function getShipment(string $shipmentId): array
    {
        $endpoint = sprintf('%s/%s', self::SHIPMENT_ENDPOINT, $shipmentId);

        return $this->makeRequest(
            method: 'GET',
            endpoint: $endpoint
        );
    }

    /**
     * This method allows you to create a new shipment.
     *
     * @param  array $formParams
     *
     * @return array
     */
    public function createShipment(array $formParams): array
    {
         $endpoint = sprintf('%s', self::SHIPMENT_ENDPOINT);

        return $this->makeRequest(
            method: 'POST',
            endpoint: $endpoint,
            formParams: $formParams
        );
    }

    /**
     * This method allows you to update a shipment.
     *
     * @param string $shipmentId
     * @param  array $formParams
     *
     * @return array
     */
    public function updateShipment(string $shipmentId, array $formParams): array
    {
        $endpoint = sprintf('%s/%s', self::SHIPMENT_ENDPOINT, $shipmentId);

        return $this->makeRequest(
            method: 'PUT',
            endpoint: $endpoint,
            formParams: $formParams
        );
    }

    /**
     * This method allows you to track a shipment.
     *
     * @param string $shipmentId
     * @return array
     */
    public function trackShipment(string $shipmentId): array
    {
        $endpoint = sprintf('%s/track/%s', self::SHIPMENT_ENDPOINT, $shipmentId);

        return $this->makeRequest(
            method: 'GET',
            endpoint: $endpoint
        );
    }

    /**
     * This method allows you to cancel a shipment.
     *
     * @param array $formParams
     * @return array
     */
    public function cancelShipment(array $formParams): array
    {
        $endpoint = sprintf('%s/cancel', self::SHIPMENT_ENDPOINT);

        return $this->makeRequest(
            method: 'POST',
            endpoint: $endpoint,
            formParams: $formParams
        );
    }

    /**
     * This method allows you to delete a shipment.
     *
     * @param array $formParams
     * @return array
     */
    public function deleteShipment(array $formParams): array
    {
        $endpoint = sprintf('%s', self::SHIPMENT_ENDPOINT);

        return $this->makeRequest(
            method: 'DELETE',
            endpoint: $endpoint,
            formParams: $formParams
        );
    }

}
