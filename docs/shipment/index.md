# Shipment API

## Sample Shipment Payload

```php
 $payload = [
      'address_from' => 'xxxxxxxxx',
      'address_to' => 'xxxxxxxxx',
      'address_return' => 'xxxxxxxxx',
      'metadata' => 'additional shipment information',
      'parcel' => 'parcel_id_1',
      'parcels' => ['parcel_id_1', 'parcel_id_2'], // required if parcel is not provided
      'shipment_purpose' => 'individual',
    ];
```

## Create Shipment

This method allows you to create a new shipment.

```php
$shipment = TerminalAfrica::createShipment($payload);
```

## Get Shipments

This method allows you to retrieve a list of shipment.

```php
$payload = [
    "perPage": 50,
    "page": 3
];

// The $payload parameter is optional.

$shipments = TerminalAfrica::getShipments($payload);
```

## Get Shipment

This method allows you to retrieve details of a specific shipment.

```php
$shipmentId = 'xxxxxxxxx';
$shipment = TerminalAfrica::getShipment($shipmentId);
```

## Update Shipment

This method allows you to update information in an existing shipment.

```php
$shipmentId = 'xxxxxxxxx';
$shipment = TerminalAfrica::updateShipment($shipmentId, $payload);
```

## Track Shipment

This method allows you to track a specific shipment.

```php
$shipmentId = 'xxxxxxxxx';
$shipment = TerminalAfrica::trackShipment($shipmentId);
```

## Cancel Shipment

This method allows you to cancel a shipment before carrier pickup.

```php
$shipmentId = 'xxxxxxxxx';
$shipment = TerminalAfrica::cancelShipment($shipmentId);
```

## Delete Shipment

This method allows you to delete a draft shipment.

```php
$shipmentId = 'xxxxxxxxx';
$shipment = TerminalAfrica::deleteShipment($shipmentId);
```

## Arrange Pickup and Delivery for Shipment

This method allows you to arrange pickup for a shipment.

```php
$shipmentPayload = [
  'rate_id' => 'xxxxxxxxx',
  'shipment_id' => 'xxxxxxxxx', //optional
];

$shipment = TerminalAfrica::arrangePickup($payload);
```
