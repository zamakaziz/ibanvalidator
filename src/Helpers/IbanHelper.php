<?php

namespace Trustinsurance\Ibanvalidator\Helpers;

class IbanHelper
{
    public static function isValid(string $iban): bool
    {
        $iban = strtolower(str_replace(' ', '', $iban));
        $iban = substr($iban, 4) . substr($iban, 0, 4);

        $iban = implode('', array_map(function ($char) {
            return is_numeric($char) ? $char : ord($char) - 87;
        }, str_split($iban)));

        return bcmod($iban, 97) == 1;
    }
}
