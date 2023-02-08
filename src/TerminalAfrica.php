<?php

namespace Cybernerdie\LaravelTerminalAfrica;

use Cybernerdie\LaravelTerminalAfrica\ApiTraits\AddressApi;
use Cybernerdie\LaravelTerminalAfrica\ApiTraits\CustomerApi;
use GuzzleHttp\Client;
use Cybernerdie\LaravelTerminalAfrica\ApiTraits\RateApi;
use Cybernerdie\LaravelTerminalAfrica\ApiTraits\ShipmentApi;
use Cybernerdie\LaravelTerminalAfrica\Exceptions\TerminalAfricaException;
use Illuminate\Http\Client\RequestException;

class TerminalAfrica
{
    use ShipmentApi, RateApi, CustomerApi, AddressApi;

     /**
     * The base uri to consume the Terminal Africa API
     *
     * @var string
     */
    protected string $baseUri;

    /**
     * The secret to consume the Terminal Africa API
     *
     * @var string
     */
    protected string $secretKey;

     /**
     * The HTTP client
     */
    protected $client;

    /**
     * The response from the request
     */
    protected mixed $response;

    public function __construct()
    {
        $this->setBaseUri();
        $this->setSecretKey();
        $this->setClientOptions();
    }

    /**
     * Set the base URI for the API request
     *
     * @throws TerminalAfricaException
     */
    protected function setBaseUri()
    {
        $baseUri = config('terminal-africa.base_uri');

        if (!$baseUri) {
            throw TerminalAfricaException::baseUriNotSet();
        }

        $this->baseUri = $baseUri;
    }

    /**
     * Set the secret key for the API request
     *
     * @throws TerminalAfricaException
     */
    protected function setSecretKey()
    {
        $secretKey = config('terminal-africa.secret');

        if (!$secretKey) {
            throw TerminalAfricaException::secretKeyNotSet();
        }

        $this->secretKey = $secretKey;
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

            $this->response = $response->getBody()->getContents();

            return $this->formatResponse();
        } catch (RequestException $e) {
            throw TerminalAfricaException::apiRequestError($e->getMessage());
        }

    }

     /**
     * Format the response from the API request
     *
     * @return mixed
     */
    protected function formatResponse(): mixed
    {
        return json_decode($this->response, true);
    }

    public function getHere()
    {
        return 'here';
    }
}
