<?php

namespace App\ApiConsumers\SalesforceRest\Shapes;

use BlackBits\ApiConsumer\Support\BaseShape;

class GetTokenShape extends BaseShape
{
    protected $return_shape_data_only = false;
    protected $require_shape_structure = false;

    protected $transformations = [];

    protected $fields = [];
}
