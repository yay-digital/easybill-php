<?php

namespace YayDigital\Easybill\Api;

class DocumentPayments extends Api
{
    public function create($body = [], $parameters = [])
    {
        return $this->post('document-payments', $parameters, $body);
    }

    public function find($id)
    {
        return $this->get("document-payments/{$id}");
    }

    public function all($parameters = [])
    {
        return $this->get('document-payments', $parameters);
    }
}