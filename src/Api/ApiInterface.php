<?php

namespace YayDigital\Easybill\Api;

interface ApiInterface
{
    public function get($url = null, $parameters = []);

    public function execute($httpMethod, $url, array $parameters = [], array $body = []);
}