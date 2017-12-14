<?php

namespace YayDigital\Easybill\Api;

class PostBoxes extends Api
{
    public function find($id)
    {
        return $this->get("post-boxes/{$id}");
    }

    public function all($parameters = [])
    {
        return $this->get('post-boxes', $parameters);
    }
}