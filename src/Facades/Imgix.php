<?php

namespace Nasyrov\Laravel\Imgix\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static \Nasyrov\Laravel\Imgix\Imgix createUrl()
 */
class Imgix extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'imgix';
    }
}
