<?php

namespace Cybernerdie\LaravelTerminalAfrica\Traits;

use Cybernerdie\LaravelTerminalAfrica\Constants\TerminalAfricaConstant;

trait ShipmentApi
{
    /**
     * This method allows you to get a list of shipments available for a user.
     */
    public function getShipments(array $queryParams = []): array
    {
        $endpoint = sprintf('%s', TerminalAfricaConstant::SHIPMENT_ENDPOINT);

        return $this->makeRequest(
            method: 'GET',
            endpoint: $endpoint,
            queryParams: $queryParams
        );
    }

    /**
     * This method allows you to retrieve details for a shipment.
     */
    public function getShipment(string $shipmentId): array
    {
        $endpoint = sprintf('%s/%s', TerminalAfricaConstant::SHIPMENT_ENDPOINT, $shipmentId);

        return $this->makeRequest(
            method: 'GET',
            endpoint: $endpoint
        );
    }

    /**
     * This method allows you to create a new shipment.
     */
    public function createShipment(array $formParams): array
    {
        $endpoint = sprintf('%s', TerminalAfricaConstant::SHIPMENT_ENDPOINT);

        return $this->makeRequest(
            method: 'POST',
            endpoint: $endpoint,
            formParams: $formParams
        );
    }

    /**
     * This method allows you to arrange pickup and delivery for a shipment.
     */
    public function arrangePickup(array $formParams): array
    {
        $endpoint = sprintf('%s/pickup', TerminalAfricaConstant::SHIPMENT_ENDPOINT);

        return $this->makeRequest(
            method: 'POST',
            endpoint: $endpoint,
            formParams: $formParams
        );
    }

    /**
     * This method allows you to update a shipment.
     */
    public function updateShipment(string $shipmentId, array $formParams): array
    {
        $endpoint = sprintf('%s/%s', TerminalAfricaConstant::SHIPMENT_ENDPOINT, $shipmentId);

        return $this->makeRequest(
            method: 'PUT',
            endpoint: $endpoint,
            formParams: $formParams
        );
    }

    /**
     * This method allows you to track a shipment.
     */
    public function trackShipment(string $shipmentId): array
    {
        $endpoint = sprintf('%s/track/%s', TerminalAfricaConstant::SHIPMENT_ENDPOINT, $shipmentId);

        return $this->makeRequest(
            method: 'GET',
            endpoint: $endpoint
        );
    }

    /**
     * This method allows you to cancel a shipment.
     */
    public function cancelShipment(string $shipmentId): array
    {
        $endpoint = sprintf('%s/cancel', TerminalAfricaConstant::SHIPMENT_ENDPOINT);

        $formParams = [
            'shipment_id' => $shipmentId
        ];

        return $this->makeRequest(
            method: 'POST',
            endpoint: $endpoint,
            formParams: $formParams
        );
    }

    /**
     * This method allows you to delete a shipment.
     */
    public function deleteShipment(string $shipmentId): array
    {
        $endpoint = sprintf('%s', TerminalAfricaConstant::SHIPMENT_ENDPOINT);

        $formParams = [
            'shipment_id' => $shipmentId
        ];

        return $this->makeRequest(
            method: 'DELETE',
            endpoint: $endpoint,
            formParams: $formParams
        );
    }
}
