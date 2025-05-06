<?php

namespace Trustinsurance\Ibanvalidator;

use Illuminate\Support\ServiceProvider;
use Trustinsurance\Ibanvalidator\IbanValidator;

class IbanValidatorServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('iban-validator', function () {
            return new IbanValidator();
        });
    }

    public function boot()
    {
        // boot logic
    }
}
