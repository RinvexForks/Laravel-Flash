<?php

/*
 * This file is part of Laravel Flash.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Tests\Flash\Facades;

use BrianFaust\Flash\Facades\Flash;
use BrianFaust\Flash\FlashNotifier;
use BrianFaust\Tests\Flash\AbstractTestCase;
use GrahamCampbell\TestBenchCore\FacadeTrait;

class FlashTest extends AbstractTestCase
{
    use FacadeTrait;

    /**
     * Get the facade accessor.
     *
     * @return string
     */
    protected function getFacadeAccessor()
    {
        return 'flash';
    }

    /**
     * Get the facade class.
     *
     * @return string
     */
    protected function getFacadeClass()
    {
        return Flash::class;
    }

    /**
     * Get the facade root.
     *
     * @return string
     */
    protected function getFacadeRoot()
    {
        return FlashNotifier::class;
    }
}
