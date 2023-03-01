<?php

namespace Cybernerdie\LaravelTerminalAfrica\Traits;

use Cybernerdie\LaravelTerminalAfrica\Constants\TerminalAfricaConstant;

trait UserApi
{
    /**
     * This endpoint allows you to retrieve details for a user account.
     */
    public function getUser(string $userId): array
    {
        $endpoint = sprintf('%s/%s', TerminalAfricaConstant::USER_ENDPOINT, $userId);

        return $this->makeRequest(
            method: 'GET',
            endpoint: $endpoint
        );
    }

    /**
     * This endpoint allows you to retrieve details of a user's wallet.
     */
    public function getWalletBalance(array $queryParams): array
    {
        $endpoint = sprintf('%s/wallet-balance', TerminalAfricaConstant::USER_ENDPOINT);

        return $this->makeRequest(
            method: 'GET',
            endpoint: $endpoint,
            queryParams: $queryParams
        );
    }

    /**
     * This endpoint allows to get a list of carriers for a specific user.
     */
    public function getUserCarriers(array $queryParams = []): array
    {
        $endpoint = sprintf('%s/carriers', TerminalAfricaConstant::USER_ENDPOINT);

        return $this->makeRequest(
            method: 'GET',
            endpoint: $endpoint,
            queryParams: $queryParams
        );
    }
}
