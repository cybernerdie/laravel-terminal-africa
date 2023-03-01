<?php

namespace Cybernerdie\LaravelTerminalAfrica\Traits;

use Cybernerdie\LaravelTerminalAfrica\Constants\TerminalAfricaConstant;

trait ClaimApi
{
    /**
     * This method allows you to get a list of claims available for a specific user
     *
     * @param  array $queryParams
     *
     * @return array
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
     *
     * @param string $claimId
     *
     * @return array
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
     *
     * @param string $insuranceReference
     * @param array $formParams
     *
     * @return array
     */
    public function fileClaim(string $insuranceReference, array $formParams): array
    {
        $endpoint = sprintf('%s', TerminalAfricaConstant::CLAIM_ENDPOINT);

        $requestData = [
            'claim' => $formParams,
            'insurance' => $insuranceReference
        ];

        return $this->makeRequest(
            method: 'POST',
            endpoint: $endpoint,
            formParams: $requestData
        );
    }
}
