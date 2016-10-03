<?php

namespace YayDigital\Easybill\Api;

use YayDigital\Easybill\Http\Client;

abstract class Api implements ApiInterface
{
    protected $apiKey;

    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
    }

    public function get($uri = null, $parameters = [])
    {
        $response = $this->execute('get', $uri, $parameters);

        if ($response->getHeader('Content-Type')[0] == 'application/json') {
            return json_decode($response->getBody(), true);
        }

        return $response->getBody();
    }

    public function post($uri = null, $parameters = [], $body = [])
    {
        return json_decode($this->execute('post', $uri, $parameters, $body)->getBody(), true);
    }

    public function execute($httpMethod, $uri, array $parameters = [], array $body = [])
    {
        return $this->getClient()->{$httpMethod}("{$uri}", [
            'query' => $parameters,
            'form_params' => $body
        ]);
    }

    protected function getClient()
    {
        return new Client($this->apiKey);
    }
}
