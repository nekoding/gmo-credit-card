<?php

namespace Nekoding\GmoCreditcard;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Nekoding\GmoCreditcard\Skeleton\SkeletonClass
 */
class GmoCreditcardFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'gmo-creditcard';
    }
}
