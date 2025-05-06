<?php

namespace Trustinsurance\IbanValidator;

use Trustinsurance\Ibanvalidator\Helpers\IbanHelper;
use Trustinsurance\Ibanvalidator\Helpers\BicHelper;

class IbanValidator
{
    public function validateIban(string $iban): bool
    {
        // return true;
        return IbanHelper::isValid($iban);
    }

    public function validateBic(string $bic): bool
    {
        return BicHelper::isValid($bic);
    }
}
