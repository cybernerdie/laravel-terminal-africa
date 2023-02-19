<?php

namespace Cybernerdie\LaravelTerminalAfrica\Traits;

trait InsuranceTrait
{
    /**
     * Endpoint for insurance API calls
     *
     * @var string
     */
    const INSURANCE_ENDPOINT = '/insurance/';

    /**
     * This method allows you to retrieve a list of insurance premiums available for a user.
     *
     * @param  array $queryParams
     *
     * @return array
     */
    public function getInsuranceList(array $queryParams = []): array
    {
        $endpoint = sprintf('%s', self::INSURANCE_ENDPOINT);

        return $this->makeRequest(
            method: 'GET',
            endpoint: $endpoint,
            queryParams: $queryParams
        );
    }

    /**
     * This method allows you to retrieve details of a specific insurance purchase.
     *
     * @param string $insuranceId
     *
     * @return array
     */
    public function getInsurance(string $insuranceId): array
    {
        $endpoint = sprintf('%s%s', self::INSURANCE_ENDPOINT, $insuranceId);

        return $this->makeRequest(
            method: 'GET',
            endpoint: $endpoint
        );
    }

    /**
     * This method allows you to retrieve premium charge for insurance coverage.
     *
     * @param  array $queryParams
     *
     * @return array
     */
    public function getInsurancePremium(array $queryParams): array
    {
        $endpoint = sprintf('%s', self::INSURANCE_ENDPOINT);

        return $this->makeRequest(
            method: 'GET',
            endpoint: $endpoint,
            queryParams: $queryParams
        );
    }

    /**
     * This method allows you to purchase insurance coverage for a shipment.
     *
     * @param array $formParams
     *
     * @return array
     */
    public function purchaseInsurance(array $formParams): array
    {
        $endpoint = sprintf('%spurchase', self::INSURANCE_ENDPOINT);

        return $this->makeRequest(
            method: 'POST',
            endpoint: $endpoint,
            formParams: $formParams
        );
    }
}
