<?php

namespace Cybernerdie\LaravelTerminalAfrica\Traits;

use Cybernerdie\LaravelTerminalAfrica\Constants\TerminalAfricaConstant;

trait ClaimApi
{
    /**
     * This method allows you to get a list of claims available for a specific user
     */
    public function getClaims(array $queryParams = []): array
    {
        $endpoint = sprintf('%s', TerminalAfricaConstant::CLAIM_ENDPOINT);

        return $this->makeRequest(
            method: 'GET',
            endpoint: $endpoint,
            queryParams: $queryParams
        );
    }

    /**
     * This method allows you to get a full details for a specfic claim.
     */
    public function getClaim(string $claimId): array
    {
        $endpoint = sprintf('%s/%s', TerminalAfricaConstant::CLAIM_ENDPOINT, $claimId);

        return $this->makeRequest(
            method: 'GET',
            endpoint: $endpoint
        );
    }

    /**
     * This method allows you to file a new claim when a package is lost or damaged.
     */
    public function fileClaim(string $insuranceReference, array $formParams): array
    {
        $endpoint = sprintf('%s', TerminalAfricaConstant::CLAIM_ENDPOINT);

        $requestData = [
            'claim' => $formParams,
            'insurance' => $insuranceReference,
        ];

        return $this->makeRequest(
            method: 'POST',
            endpoint: $endpoint,
            formParams: $requestData
        );
    }
}
