<?php

namespace Ptondereau\LaravelUpsApi\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * This is the UpsAddressValidation facade class.
 *
 * @author Pierre Tondereau <pierre@doers.fr>
 */
class UpsAddressValidation extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'ups.address-validation';
    }
}
