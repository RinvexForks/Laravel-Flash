<?php

namespace BrianFaust\Tests\Flash\Facades;

use GrahamCampbell\TestBenchCore\FacadeTrait;
use BrianFaust\Tests\Flash\AbstractTestCase;
use BrianFaust\Flash\FlashNotifier;
use BrianFaust\Flash\Facades\Flash;

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
