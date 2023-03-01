<?php

namespace Cybernerdie\LaravelTerminalAfrica\Traits;

use Cybernerdie\LaravelTerminalAfrica\Constants\TerminalAfricaConstant;
trait LocationApi
{
    /**
     * This endpoint allows you to retrieve a list of valid countries.
     *
     * @return array
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
     *
     * @param array $queryParams
     * @return array
     */
    public function getStates(array $queryParams): array
    {
        $endpoint = '/states';

        return $this->makeRequest(
            method: 'GET',
            endpoint: $endpoint,
            queryParams: $queryParams
        );
    }

     /**
     * This endpoint allows you to retrieve a list of valid cities available in a specific country.
     *
     * @param array $queryParams
     * @return array
     */
    public function getCities(array $queryParams): array
    {
        $endpoint = '/cities';

        return $this->makeRequest(
            method: 'GET',
            endpoint: $endpoint,
            queryParams: $queryParams
        );
    }
}
