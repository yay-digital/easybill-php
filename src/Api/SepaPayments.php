<?php

namespace YayDigital\Easybill\Api;

class SepaPayments extends Api
{
    public function create($body = [], $parameters = [])
    {
        return $this->post('sepa-payments', $parameters, $body);
    }

    public function find($id)
    {
        return $this->get("sepa-payments/{$id}");
    }

    public function all($parameters = [])
    {
        return $this->get('sepa-payments', $parameters);
    }
}