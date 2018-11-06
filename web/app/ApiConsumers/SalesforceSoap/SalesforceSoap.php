<?php

namespace App\ApiConsumers\SalesforceSoap;

use BlackBits\ApiConsumer\ApiConsumer;

class SalesforceSoap extends ApiConsumer
{
    protected function getEndpoint()
    {
        return config('api-consumers.SalesforceSoap.apiBasePath');
    }
}
