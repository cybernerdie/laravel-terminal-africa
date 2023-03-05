# Carrier API

## Get Carriers

This method allows you to get a list of carriers available on TShip.

```php
$payload = [
    "perPage": 50,
    "page": 3
];

// The $payload parameter is optional.
$carriers = TerminalAfrica::getCarriers($payload);
```

## Get Carrier

This method allows you to retrieve details of a specific carrier.

```php
$carrierId = 'xxxxxxxxx';
$address = TerminalAfrica::getCarrier($carrierId);
```

## Enable Carrier

This method allows you to enable a carrier. One of domestic, international or regional query parameters is required in request.

```php
$carrierId = 'xxxxxxxxx';
$carrierPayload = [
        'domestic' => 'true',
        'international' => 'false',
        'regional' => 'true'
    ];

$carrier = TerminalAfrica::enableCarrier($carrierId, $carrierPayload);
```

## Enable Multiple Carrier

This method allows you to enable multiple carriers in a single call.

```php
 $carrierPayload = [
        [
            'carrier_id' => 'xxxxxxxxx',
            'domestic' => 'true',
            'international' => 'true',
            'regional' => 'false'
        ],
        [
            'carrier_id' => 'xxxxxxxxx',
            'domestic' => 'false',
            'international' => 'true',
            'regional' => 'true'
        ]
    ];

$carriers = TerminalAfrica::enableMultipleCarrier($carrierPayload);
```

## Disable Carrier

This method allows you to disable a carrier. One of domestic, international or regional query parameters is required in request.

```php
$carrierId = 'xxxxxxxxx';
$carrierPayload = [
        'domestic' => 'true',
        'international' => 'false',
        'regional' => 'true'
    ];

$carrier = TerminalAfrica::disableCarrier($carrierId, $carrierPayload);
```

## Disable Multiple Carrier

This method allows you to disable multiple carriers in a single call.

```php
 $carrierPayload = [
        [
            'carrier_id' => 'xxxxxxxxx',
            'domestic' => 'true',
            'international' => 'true',
            'regional' => 'false'
        ],
        [
            'carrier_id' => 'xxxxxxxxx',
            'domestic' => 'false',
            'international' => 'true',
            'regional' => 'true'
        ]
    ];

$carriers = TerminalAfrica::disableMultipleCarrier($carrierPayload);
```