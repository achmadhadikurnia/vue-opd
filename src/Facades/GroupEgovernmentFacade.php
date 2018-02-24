<?php

namespace Bantenprov\VueOpd\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * The VueOpd facade.
 *
 * @package Bantenprov\VueOpd
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class VueOpdFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'vue-opd';
    }
}
