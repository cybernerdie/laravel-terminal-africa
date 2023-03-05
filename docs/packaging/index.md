# Packaging API

## Sample Packaging Payload

```php
 $payload = [
        'height' => 20,
        'length' => 30,
        'name' => 'Big Boxes',
        'size_unit' => 'cm',
        'type' => 'box',
        'width' => 15,
        'weight' => 2.5,
        'weight_unit' => 'kg'
    ];
```

## Create Packaging

This method allows you to add new packaging.

```php
$packaging = TerminalAfrica::createPackaging($payload);
```

## Get Packaging List

This method allows you to retrieve a list of packaging available for a user.

```php
$payload = [
    "perPage": 50,
    "page": 3
];

// The $payload parameter is optional.
$packagingList = TerminalAfrica::getPackagingList($payload);
```

## Get Packaging

This method allows you to retrieve details of a specific packaging.

```php
$packagingId = 'xxxxxxxxx';
$packaging = TerminalAfrica::getPackaging($packagingId);
```

## Update Packaging

This method allows you to update an existing packaging.

```php
$packagingId = 'xxxxxxxxx';
$packaging = TerminalAfrica::updatePackaging($packagingId, $payload);
```