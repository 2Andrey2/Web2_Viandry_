<?php

namespace JohnDoe\BlogPackage\Facades;

use Illuminate\Support\Facades\Facade;

class ShippingCost extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'ShippingCost';
    }
}