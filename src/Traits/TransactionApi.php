<?php

namespace Cybernerdie\LaravelTerminalAfrica\Traits;

use Cybernerdie\LaravelTerminalAfrica\Constants\TerminalAfricaConstant;

trait TransactionApi
{
    /**
     * This endpoint allows you to get a list of all transactions on an account.
     */
    public function getTransactions(array $queryParams): array
    {
        $endpoint = sprintf('%s', TerminalAfricaConstant::TRANSACTION_ENDPOINT);

        return $this->makeRequest(
            method: 'GET',
            endpoint: $endpoint,
            queryParams: $queryParams
        );
    }

    /**
     * This endpoint allows you to retrieve details for a transaction.
     */
    public function getTransaction(string $transactionId): array
    {
        $endpoint = sprintf('%s/%s', TerminalAfricaConstant::TRANSACTION_ENDPOINT, $transactionId);

        return $this->makeRequest(
            method: 'GET',
            endpoint: $endpoint
        );
    }
}
