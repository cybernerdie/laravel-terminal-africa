<?php

namespace Cybernerdie\LaravelTerminalAfrica;

use Cybernerdie\LaravelTerminalAfrica\Contracts\TerminalAfricaContract;
use Cybernerdie\LaravelTerminalAfrica\Exceptions\TerminalAfricaException;
use Cybernerdie\LaravelTerminalAfrica\Traits\AddressApi;
use Cybernerdie\LaravelTerminalAfrica\Traits\CarrierApi;
use Cybernerdie\LaravelTerminalAfrica\Traits\ClaimApi;
use Cybernerdie\LaravelTerminalAfrica\Traits\InsuranceApi;
use Cybernerdie\LaravelTerminalAfrica\Traits\LocationApi;
use Cybernerdie\LaravelTerminalAfrica\Traits\PackagingApi;
use Cybernerdie\LaravelTerminalAfrica\Traits\ParcelApi;
use Cybernerdie\LaravelTerminalAfrica\Traits\RateApi;
use Cybernerdie\LaravelTerminalAfrica\Traits\ShipmentApi;
use Cybernerdie\LaravelTerminalAfrica\Traits\TransactionApi;
use Cybernerdie\LaravelTerminalAfrica\Traits\UserApi;
use Cybernerdie\LaravelTerminalAfrica\Traits\WebhookApi;
use GuzzleHttp\Client;
use Illuminate\Http\Client\RequestException;

class TerminalAfricaService implements TerminalAfricaContract
{
    use ShipmentApi, RateApi, AddressApi, CarrierApi, ClaimApi,
        PackagingApi, InsuranceApi, ParcelApi, TransactionApi,
        UserApi, LocationApi, WebhookApi;

    /**
     * The base uri to consume the Terminal Africa API
     */
    protected string $baseUri;

    /**
     * The secret to consume the Terminal Africa API
     */
    protected string $secret;

    /**
     * The HTTP client
     */
    protected Client $client;

    /**
     * The response from the request
     */
    protected mixed $response;

    public function __construct()
    {
        $this->setBaseUri();
        $this->setSecret();
        $this->setClient();
    }

    /**
     * Set the base URI for the API request
     *
     * @throws TerminalAfricaException
     */
    public function setBaseUri(): void
    {
        $baseUri = config('terminal-africa.base_uri');

        if (! $baseUri) {
            throw TerminalAfricaException::baseUriNotSet();
        }

        $this->baseUri = $baseUri;
    }

    /**
     * Set the secret key for the API request
     *
     * @throws TerminalAfricaException
     */
    public function setSecret(): void
    {
        $secret = config('terminal-africa.secret');

        if (! $secret) {
            throw TerminalAfricaException::secretKeyNotSet();
        }

        $this->secret = $secret;
    }

    /**
     * Set the authorization header.
     */
    public function setAuthorizationHeader(): string
    {
        return 'Bearer '.$this->secret;
    }

    /**
     * Get the client headers.
     *
     * @return array The headers for the client.
     */
    public function getClientHeaders(): array
    {
        $authBearer = $this->setAuthorizationHeader();

        $headers = [
            'Authorization' => $authBearer,
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ];

        return $headers;
    }

    /**
     * Set the client.
     */
    public function setClient(): void
    {
        $this->client = new Client([
            'base_uri' => $this->baseUri,
        ]);
    }

    /**
     * Make the actual API request
     */
    public function makeRequest(string $endpoint, string $method, array $queryParams = [], array $formParams = []): array
    {
        try {
            $requestUrl = sprintf('%s%s', $this->baseUri, $endpoint);
            $headers = $this->getClientHeaders();

            $response = $this->client->request($method, $requestUrl, [
                'json' => $formParams,
                'headers' => $headers,
                'query' => $queryParams,
            ]);

            $this->response = $response->getBody()->getContents();

            return $this->formatResponse();
        } catch (RequestException $e) {
            throw TerminalAfricaException::apiRequestError($e->getMessage());
        }
    }

    /**
     * Format the response from the API request
     */
    public function formatResponse(): mixed
    {
        return json_decode($this->response, true);
    }
}
