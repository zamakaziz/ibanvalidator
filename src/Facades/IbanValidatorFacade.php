<?php

namespace Trustinsurance\IbanValidator\Facades;

use Illuminate\Support\Facades\Facade;

class IbanValidatorFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'iban-validator';
    }
}
