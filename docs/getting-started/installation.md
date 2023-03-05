# Installation

By following these instructions, you will be able to easily install the package.

## Prerequisite
[PHP](https://php.net) 7.2+, [Laravel](https://laravel.com) 7+ and [Composer](https://getcomposer.org) are required.

To get the latest version of the package, simply use composer

```bash
composer require cybernerdie/laravel-terminal-africa
```

## Configuration

Publish the configuration file using this command:

```bash
php artisan vendor:publish --provider="Cybernerdie\LaravelTerminalAfrica\LaravelTerminalAfricaServiceProvider"
```

The **`terminal-africa.php`** configuration fill will be created in your **`config`** directory

## Usage

In your .env file set the following keys:

```php
TERMINAL_AFRICA_URI=xxxxxxxxxxxxxx
TERMINAL_AFRICA_SECRET_KEY=xxxxxxxxxxx
```

* **TERMINAL_AFRICA_URI -** The api endpoints for terminal africa, can be gotten [here](https://docs.terminal.africa/tship/authentication)

* **TERMINAL_AFRICA_SECRET_KEY -** This is the access key to the api, can be gotten [here](https://app.terminal.africa/)

