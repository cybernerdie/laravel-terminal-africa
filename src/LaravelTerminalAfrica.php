<?php

namespace Cybernerdie\LaravelTerminalAfrica;

use GuzzleHttp\Client;
use Cybernerdie\LaravelTerminalAfrica\ApiTraits\CustomersApiTrait;
use Cybernerdie\LaravelTerminalAfrica\ApiTraits\RatesApiTrait;
use Cybernerdie\LaravelTerminalAfrica\ApiTraits\ShipmentsApiTrait;
use Cybernerdie\LaravelTerminalAfrica\Exceptions\TerminalAfricaException;
use Illuminate\Http\Client\RequestException;

class LaravelTerminalAfrica
{
    private $baseUri;
    private $secretKey;
    protected $client;

    use ShipmentsApiTrait, RatesApiTrait, CustomersApiTrait;

    public function __construct()
    {
        $this->setBaseUri();
        $this->setSecretKey();
        $this->setClientOptions();
    }

    /**
     * Set the base URI for the API request
     */
    protected function setBaseUri()
    {
        $this->baseUri = 'https://api.terminal.africa/v1';
    }

    /**
     * Set the secret key for the API request
     */
    protected function setSecretKey()
    {
        $this->secretKey = config('api.secret');
    }

    /**
     * Set the client options including the Guzzle client and the headers.
     *
     * @return void
     */
    private function setClientOptions()
    {
        $authBearer = 'Bearer ' . $this->secretKey;

        $this->client = new Client([
            'base_uri' => $this->baseUri,
            'headers' => [
                'Authorization' => $authBearer,
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
            ],
        ]);
    }

    /**
     * Make the actual API request
     *
     * @param string $endpoint
     * @param string $method
     * @param array $data
     * @return array
     */
    protected function makeApiRequest($endpoint, $method, $data = [])
    {
        try {
            $response = $this->client->request($method, $endpoint, [
                'json' => $data
            ]);

            return $this->formatResponse($response);
        } catch (RequestException $e) {
            throw TerminalAfricaException::apiRequestError($e->getMessage());
        }

    }

     /**
     * Format the response from the API request
     *
     * @param mixed $response
     * @return array
     */
    protected function formatResponse($response): array
    {
        return json_decode($response, true);
    }
}
