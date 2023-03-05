# Claim API

## Get Claims

This method allows you to get a list of claims available for a specific user.

```php
$payload = [
    "perPage": 50,
    "page": 3
];

// The $payload parameter is optional.
$claims = TerminalAfrica::getClaims($payload);
```

## Get Claim

This method allows you to get a full details for a specific claim.

```php
$claimId = 'xxxxxxxxx';
$address = TerminalAfrica::getClaim($claimId);
```

## File Claim

This method allows you to file a new claim when a package is lost or damaged.

```php
$claimPayload = [
          'description' =>  "My laptop was damaged during shipment",
            'reason'  =>  "damage",
            'signature'  =>  "xxxxxxxxxxxxxxxx",
            'witnesses'  =>  [
              ["John Doe", "+2348000000000"],
              ["Jane Doe", "+2348000000000"]
            ]
    ];

$claim = TerminalAfrica::fileClaim($claimPayload);
```