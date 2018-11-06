<?php

namespace App\ApiConsumers\SalesforceRest;

use BlackBits\ApiConsumer\ApiConsumer;

class SalesforceRest extends ApiConsumer
{
    protected function getEndpoint()
    {
        return config('api-consumers.SalesforceRest.apiBasePath');
    }
}
