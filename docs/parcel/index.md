# Parcel API

## Sample Parcel Payload

```php
 $payload = [
       'description' => 'New parcel for shipment',
        'items' => [
              [
                'description' => 'Purple cotton and t-shirt, size L',
                'hs_code' => '6205',
                'name' => 'Shirt',
                'type' => 'parcel',
                'currency' => 'USD',
                'value' => 25.99,
                'quantity' => 1,
                'weight' => 0.2
              ],
              [
                'description' => 'Bugundi cottons with t-shirt, size L',
                'hs_code' => '6205',
                'name' => 'Shirt',
                'type' => 'parcel',
                'currency' => 'USD',
                'value' => 43.99,
                'quantity' => 1,
                'weight' => 0.2
              ]
            ],
        'metadata' => [
            'customer_name' => 'John Doe',
            'customer_email' => 'johndoe@example.com'
        ],
        'packaging' => 'xxxxxxxxx',
        'weight_unit' => 'kg'
    ];
```

## Create Parcel

This method allows you to create a new parcel for a shipment.

```php
$parcel = TerminalAfrica::createParcel($payload);
```

## Get Parcels

This method allows you to retrieve a list of parcel available for a user.

```php
$payload = [
    "perPage": 50,
    "page": 3
];

// The $payload parameter is optional.
$parcels = TerminalAfrica::getParcels($payload);
```

## Get Parcel

This method allows you to retrieve details of a specific parcel.

```php
$parcelId = 'xxxxxxxxx';
$parcel = TerminalAfrica::getParcel($parcelId);
```

## Update Parcel

This method allows you to update information in an existing parcel. Only unused parcels can be updated.

```php
$parcelId = 'xxxxxxxxx';
$parcel = TerminalAfrica::updateParcel($parcelId, $payload);
```
