<?php

namespace YayDigital\Easybill\Api;

class Documents extends Api
{
    public function create($body = [], $parameters = [])
    {
        return $this->post('documents', $parameters, $body);
    }

    public function find($id)
    {
        return $this->get("documents/{$id}");
    }

    public function all($parameters = [])
    {
        return $this->get('documents', $parameters);
    }
}