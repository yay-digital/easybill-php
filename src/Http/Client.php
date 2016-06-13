<?php

namespace YayDigital\Easybill\Http;

use Psr\Http\Message\RequestInterface;

class Client extends \GuzzleHttp\Client implements ClientInterface
{
    protected $apiKey;

    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;

        parent::__construct([
            'base_uri' => 'https://api.easybill.de/rest/v1/',
            'auth' => [null, $apiKey],
            'headers' => [
                'Content-Type' => 'application/json'
            ]
        ]);
    }

    public function send(RequestInterface $request, array $options = [])
    {
        return parent::send($request, $options);
    }
}