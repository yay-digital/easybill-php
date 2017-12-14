<?php

namespace YayDigital\Easybill\Api;

class Customers extends Api
{
    public function create($body = [], $parameters = [])
    {
        return $this->post('customers', $parameters, $body);
    }

    public function find($id)
    {
        return $this->get("customers/{$id}");
    }

    public function all($parameters = [])
    {
        return $this->get('customers', $parameters);
    }
}