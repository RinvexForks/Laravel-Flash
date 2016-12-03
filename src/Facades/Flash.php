<?php

/*
 * This file is part of Laravel Flash.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

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
