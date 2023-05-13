<?php

namespace Cybernerdie\LaravelTerminalAfrica\Traits;

use Cybernerdie\LaravelTerminalAfrica\Constants\TerminalAfricaConstant;

trait WebhookApi
{
    /**
     * This method allows you to create a new webhook.
     */
    public function createWebhook(array $formParams): array
    {
        $endpoint = sprintf('%s', TerminalAfricaConstant::WEBHOOK_ENDPOINT);

        return $this->makeRequest(
            method: 'POST',
            endpoint: $endpoint,
            formParams: $formParams
        );
    }

    /**
     * This method allows you to retrieve a list of webhooks.
     */
    public function getWebhooks(array $queryParams = []): array
    {
        $endpoint = sprintf('%s', TerminalAfricaConstant::WEBHOOK_ENDPOINT);

        return $this->makeRequest(
            method: 'GET',
            endpoint: $endpoint,
            queryParams: $queryParams
        );
    }

    /**
     * This method allows you to retrieve details of a specific webhook.
     */
    public function getWebhook(string $webhookId): array
    {
        $endpoint = sprintf('%s/%s', TerminalAfricaConstant::WEBHOOK_ENDPOINT, $webhookId);

        return $this->makeRequest(
            method: 'GET',
            endpoint: $endpoint
        );
    }

    /**
     * This method allows you to disable a specific webhook.
     */
    public function disableWebhook(string $webhookId): array
    {
        $endpoint = sprintf('%s/disable/%s', TerminalAfricaConstant::WEBHOOK_ENDPOINT, $webhookId);

        return $this->makeRequest(
            method: 'POST',
            endpoint: $endpoint
        );
    }

    /**
     * This method allows you to enable a specific webhook.
     */
    public function enableWebhook(string $webhookId): array
    {
        $endpoint = sprintf('%s/enable/%s', TerminalAfricaConstant::WEBHOOK_ENDPOINT, $webhookId);

        return $this->makeRequest(
            method: 'POST',
            endpoint: $endpoint
        );
    }

    /**
     * This method allows you to delete a specific webhook.
     */
    public function deleteWebhook(string $webhookId): array
    {
        $endpoint = sprintf('%s/%s', TerminalAfricaConstant::WEBHOOK_ENDPOINT, $webhookId);

        return $this->makeRequest(
            method: 'DELETE',
            endpoint: $endpoint
        );
    }
}
