# Insurance API

## Get Insurance List

This method allows you to retrieve a list of insurance premiums available for a user.

```php
$payload = [
    "perPage": 50,
    "page": 3
];

// The $payload parameter is optional.
$insuranceList = TerminalAfrica::getInsuranceList($payload);
```

## Get Insurance

This method allows you to retrieve details of a specific insurance purchase.

```php
$insuranceId = 'xxxxxxxxx';
$insurance = TerminalAfrica::getInsurance($insuranceId);
```

## Get Premium Insurance

This method allows you to retrieve premium charge for insurance coverage.

```php
$premiumInsurance = TerminalAfrica::getPremiumInsurance();
```

## Purchase Insurace

This method allows you to purchase insurance coverage for a shipment.

```php
$insurancePayload = [
          'description' =>  "My laptop was damaged during shipment",
            'reason'  =>  "damage",
            'signature'  =>  "xxxxxxxxxxxxxxxx",
            'witnesses'  =>  [
              ["John Doe", "+2348000000000"],
              ["Jane Doe", "+2348000000000"]
            ]
    ];

$insurance = TerminalAfrica::purchaseInsurance($insurancePayload);
```