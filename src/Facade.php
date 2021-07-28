<?php

namespace rafieathari6\LaravelPageBuilder;

/**
 * @see \rafieathari6\LaravelPageBuilder\LaravelPageBuilder
 */
class Facade extends \Illuminate\Support\Facades\Facade
{
    /**
     * {@inheritDoc}
     */
    protected static function getFacadeAccessor()
    {
        return LaravelPageBuilder::class;
    }
}
