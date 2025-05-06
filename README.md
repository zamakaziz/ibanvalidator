# IBAN and BIC Validator for Laravel

A lightweight Laravel package to validate **IBAN** and **BIC** codes.  
This package simplifies validating international bank account numbers (IBAN) and bank identifier codes (BIC) using simple, reliable logic.

---

## 📦 Installation

### Step 1: Require the package via Composer

```bash
composer require trustinsurance/ibanvalidator:^1.0


#Usage


Option 1: Dependency Injection
use Illuminate\Http\Request;
use Trustinsurance\IbanValidator\IbanValidator;

class PaymentController extends Controller
{
    protected $validator;

    public function __construct(IbanValidator $validator)
    {
        $this->validator = $validator;
    }

    public function validateBankDetails(Request $request)
    {
        $iban = 'CY17002001280000001200527600';
        $bic = 'CBCYCY2N';

        return response()->json([
            'iban_valid' => $this->validator->validateIban($iban),
            'bic_valid' => $this->validator->validateBic($bic),
        ]);
    }
}
Option 2: Facade Usage


use IbanValidator;

$iban = 'CY17002001280000001200527600';
$bic = 'CBCYCY2N';

$isIbanValid = IbanValidator::validateIban($iban);
$isBicValid = IbanValidator::validateBic($bic);

Validation Rules
IBAN Validation Logic

The IBAN validator checks the following:

    Removes all spaces

    Moves the first 4 characters to the end

    Converts alphabetic characters to numbers (A = 10, B = 11, ..., Z = 35)

    Computes mod 97 and checks if result equals 1

Example (Cyprus):

    CY17002001280000001200527600 → ✅ Valid

BIC Validation Logic

Validates BIC format using regex:

    8 or 11 characters

    Structure: BBBBCCLL or BBBBCCLLXXX

        BBBB: Bank code (letters)

        CC: Country code (letters)

        LL: Location code (alphanumeric)

        XXX: Optional branch code (alphanumeric)

Example:

    CBCYCY2N → ✅ Valid


