<?php

namespace Cybernerdie\LaravelTerminalAfrica\Traits;

trait TransactionApi
{
    /**
     * Endpoint for transaction API calls
     *
     * @var string
     */
    const TRANSACTION_ENDPOINT = '/transactions';

    /**
     * This endpoint allows you to get a list of all transactions on an account.
     *
     * @param array $queryParams
     * @return array
     */
    public function getTransactions(array $queryParams): array
    {
        $endpoint = sprintf('%s', self::TRANSACTION_ENDPOINT);

        return $this->makeRequest(
            method: 'GET',
            endpoint: $endpoint,
            queryParams: $queryParams
        );
    }

    /**
     * This endpoint allows you to retrieve details for a transaction.
     *
     * @param string $transactionId
     * @return array
     */
    public function getTransaction(string $transactionId): array
    {
        $endpoint = sprintf('%s/%s', self::TRANSACTION_ENDPOINT, $transactionId);

        return $this->makeRequest(
            method: 'GET',
            endpoint: $endpoint
        );
    }
}
