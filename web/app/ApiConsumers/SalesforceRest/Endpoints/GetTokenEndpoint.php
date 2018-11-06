<?php

namespace App\ApiConsumers\SalesforceRest\Endpoints;

use BlackBits\ApiConsumer\Support\Endpoint;

class GetTokenEndpoint extends Endpoint
{
    protected $path = '';

    public function all() {
        return $this->get();
    }
}
