## Usage

## Introduction
The `LaravelTerminalAfrica` package provides convenient methods for usage. This document explains the different ways you can use the package to interact with the TerminalAfrica service. The `getAddresses` method is used as an example throughout this guide.

## Using Facade
The Facade method allows you to directly access the package methods statically.

```php
use Cybernerdie\LaravelTerminalAfrica\Facades\TerminalAfrica;

$addresses = TerminalAfrica::getAddresses();

```

## Using Dependency Injection
You can inject the TerminalAfricaContract instance into your code and access the package methods through it.

```php
use Cybernerdie\LaravelTerminalAfrica\Contracts\TerminalAfricaContract;

public function __invoke(TerminalAfricaContract $terminalAfrica)
{
    $addresses = $terminalAfrica->getAddresses();
}
```

## Using Helper
The package also provides a convenient helper function that allows you to access the package methods.

```php
$addresses = terminal_africa()->getAddresses();
```

Choose the method that suits your project's needs and start using the LaravelTerminalAfrica package!


