<?php

namespace Cybernerdie\LaravelTerminalAfrica\Traits;

use Cybernerdie\LaravelTerminalAfrica\Constants\TerminalAfricaConstant;

trait InsuranceApi
{
    /**
     * This method allows you to retrieve a list of insurance premiums available for a user.
     */
    public function getInsuranceList(array $queryParams = []): array
    {
        $endpoint = sprintf('%s', TerminalAfricaConstant::INSURANCE_ENDPOINT);

        return $this->makeRequest(
            method: 'GET',
            endpoint: $endpoint,
            queryParams: $queryParams
        );
    }

    /**
     * This method allows you to retrieve details of a specific insurance purchase.
     */
    public function getInsurance(string $insuranceId): array
    {
        $endpoint = sprintf('%s/%s', TerminalAfricaConstant::INSURANCE_ENDPOINT, $insuranceId);

        return $this->makeRequest(
            method: 'GET',
            endpoint: $endpoint
        );
    }

    /**
     * This method allows you to retrieve premium charge for insurance coverage.
     */
    public function getInsurancePremium(array $queryParams): array
    {
        $endpoint = sprintf('%s', TerminalAfricaConstant::INSURANCE_ENDPOINT);

        return $this->makeRequest(
            method: 'GET',
            endpoint: $endpoint,
            queryParams: $queryParams
        );
    }

    /**
     * This method allows you to purchase insurance coverage for a shipment.
     */
    public function purchaseInsurance(array $formParams): array
    {
        $endpoint = sprintf('%s/purchase', TerminalAfricaConstant::INSURANCE_ENDPOINT);

        return $this->makeRequest(
            method: 'POST',
            endpoint: $endpoint,
            formParams: $formParams
        );
    }
}
