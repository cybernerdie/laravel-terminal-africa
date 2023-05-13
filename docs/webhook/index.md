# Webhook API

## Sample Webhook Payload

```php
$payload = [
    'active' => true,
    'events' => ['address.created', 'shipment.created'],
    'live' => true,
    'name' => 'My Webhook',
    'url' => 'https://example.com/webhook'
];
```

## Create Webhook

This method allows you to create a new webhook.

```php
$webhook = TerminalAfrica::createWebhook($payload);
```

## Get webhooks

This method allows you to retrieve a list of webhooks.

```php
$payload = [
    "perPage": 50,
    "page": 3
];

// The $payload parameter is optional.
$webhooks = TerminalAfrica::getWebhooks($payload);
```

## Get webhook

This method allows you to retrieve details of a specific webhook.

```php
$webhookId = 'xxxxxxxxx';
$webhook = TerminalAfrica::getWebhook($webhookId);
```

## Enable webhook

This method allows you to enable a webhook.

```php
$webhookId = 'xxxxxxxxx';
$webhook = TerminalAfrica::enableWebhook($webhookId);
```

## Disable webhook

This method allows you to disable a webhook.

```php
$webhookId = 'xxxxxxxxx';
$webhook = TerminalAfrica::disableWebhook($webhookId);
```

## Delete webhook

This method allows you to delete a webhook.

```php
$webhookId = 'xxxxxxxxx';
$webhook = TerminalAfrica::deleteWebhook($webhookId);
```
