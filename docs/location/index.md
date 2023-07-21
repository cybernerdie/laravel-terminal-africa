# Location API

## Get Countries

This method allows you to get list of countries.

```php
$countries = TerminalAfrica::getCountries();
```

## Get States

This method allows you to retrieve a list of states by it's country code.

```php

$countryCode = 'NG';
$states = TerminalAfrica::getStates($countryCode);
```

## Get Cities

This method allows you to retrieve a list of states by it's country code and state code.

```php
$countryCode = 'NG';
$stateCode = 'Lagos';
$cities = TerminalAfrica::getCities($countryCode, $stateCode);
```
