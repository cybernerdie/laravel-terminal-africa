# Rate API

## Get Rates

This method allows you to get a list of all rates generated by a user.

```php
$payload = [
    "perPage": 50,
    "page": 3
];

// The $payload parameter is optional.
$rates = TerminalAfrica::getRates($payload);
```

## Get Rate

This method allows you to retrieve details of a specific shipping rate.

```php
$rateId = 'xxxxxxxxx';
$rate = TerminalAfrica::getRate($rateId);
```

## Get Rate for Shipment

This method allows you to retrieve rates for a shipment.

```php
$ratePayload = [
        'currency' => 'NGN',
        'shipment_id' => 'xxxxxxxxxxx',
        'pickup_address' => 'xxxxxxxxxxx',
        'delivery_address' => 'xxxxxxxxxxx',
];

$rate = TerminalAfrica::getRateForShipment($ratePayload);
```

## Get Rates for Multi-Parcel Shipment

This method allows you to retrieve rates for a shipment.

```php
$ratePayload = [
        'currency' => 'NGN',
        'shipment_id' => 'xxxxxxxxxxx',
        'pickup_address' => 'xxxxxxxxxxx',
        'delivery_address' => 'xxxxxxxxxxx',
        'parcels' = ['xxxxxxxxxxx', 'xxxxxxxxxxx']
];

$rate = TerminalAfrica::getRateForMultiParcelShipment($ratePayload);
```
