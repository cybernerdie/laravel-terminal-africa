# Miscellaneous

## Get Countries

This method allows you to retrieve a list of valid countries.

```php
$countries = TerminalAfrica::getCountries();
```

## Get States

This method allows you to retrieve a list of valid states for a given country.

```php
$statesPayload = [
  'country_code' => 'NG',
];

$states = TerminalAfrica::getStates($data);
```

## Get Cities

This method allows you to retrieve a list of valid cities available in a specific country.

```php
$citiesPayload = [
   'country_code' => 'NG',
   'state_code' => 'FC'
];

$cities = TerminalAfrica::getCities($citiesPayload);
```