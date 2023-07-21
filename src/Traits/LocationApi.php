<?php

namespace Cybernerdie\LaravelTerminalAfrica\Traits;

trait LocationApi
{
    /**
     * This endpoint allows you to retrieve a list of valid countries.
     */
    public function getCountries(): array
    {
        $endpoint = '/countries';

        return $this->makeRequest(
            method: 'GET',
            endpoint: $endpoint
        );
    }

    /**
     * This endpoint allows you to retrieve a list of valid states for a given country.
     */
    public function getStates(string $countryCode): array
    {
        $endpoint = '/states';

        $queryParams = [
            'country_code' => $countryCode,
        ];

        return $this->makeRequest(
            method: 'GET',
            endpoint: $endpoint,
            queryParams: $queryParams
        );
    }

    /**
     * This endpoint allows you to retrieve a list of valid cities available in a specific country.
     */
    public function getCities(string $countryCode, string $stateCode): array
    {
        $endpoint = '/cities';

        $queryParams = [
            'country_code' => $countryCode,
            'state_code' => $stateCode,
        ];

        return $this->makeRequest(
            method: 'GET',
            endpoint: $endpoint,
            queryParams: $queryParams
        );
    }
}
