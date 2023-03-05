# Address API

## Sample Address Payload

```php
 $payload = [
        'city' => 'Lagos',
        'state' => 'Lagos',
        'country' => 'NG',
        'email' => 'john.doe@example.com',
        'first_name' => 'John',
        'is_residential' => true,
        'last_name' => 'Doe',
        'line1' => 'No 1, Example Street',
        'line2' => 'Example Area',
        'metadata' => [
            'notes' => 'This is a sample address'
        ],
        'name' => 'John Doe',
        'phone' => '+234800000000',
        'zip' => '100001'
    ];
```

## Create Address

This method allows you to add a new address to your account.

```php
$address = TerminalAfrica::createAddress($payload);
```

## Get Addresses

This method allows you to get a list of all addresses available.

```php
$payload = [
    "perPage": 50,
    "page": 3
];

// The $payload parameter is optional.
$addresses = TerminalAfrica::getAddresses($payload);
```

## Get Address

This method allows you to retrieve the details of a specific address.

```php
$addressId = 'xxxxxxxxx';
$address = TerminalAfrica::getAddress($addressId);
```

## Update Address

This method allows you to update an existing address.

```php
$addressId = 'xxxxxxxxx';
$address = TerminalAfrica::updateAddress($addressId, $payload);
```

## Validate Address

This method allows you to validate the details of any global address.

```php
$addressPayload = [
    'city' => 'Lagos',
    'state' => 'Lagos',
    'country' => 'NG',
    'line1' => 'No 1, Example Street',
    'line2' => 'Example Area',
    'zip' => '100001'
];

$address = TerminalAfrica::validateAddress($addressPayload);
```
