<?php

namespace Trustinsurance\Ibanvalidator\Helpers;

class BicHelper
{
    public static function isValid(string $bic): bool
    {
        return preg_match('/^[A-Za-z]{4}[A-Za-z]{2}[A-Za-z0-9]{2}([A-Za-z0-9]{3})?$/', $bic);
    }
}
