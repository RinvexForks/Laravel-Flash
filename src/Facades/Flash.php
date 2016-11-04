<?php

namespace BrianFaust\Flash\Facades;

use Illuminate\Support\Facades\Facade;

class Flash extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'flash';
    }
}
