<?php

namespace JohnDoe\BlogPackage\Facades;

use Illuminate\Support\Facades\Facade;

class ExchangeRate extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'ExchangeRate';
    }
}