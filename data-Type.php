<?php
declare(strict_types=1); // Enforces strict typing for function calls in this file

/**
 * ============================================================================
 * PHP DATA TYPES: COMPLETE REFERENCE & PRACTICE
 * ============================================================================
 * Categories:
 * 1. Scalar Types: String, Integer, Float, Boolean
 * 2. Compound Types: Array, Object
 * 3. Special Types: NULL, Resource
 * 4. Type Casting, Type Juggling & Modern Type Checking
 */

// ----------------------------------------------------------------------------
// 1. SCALAR TYPES (Single-value storage)
// ----------------------------------------------------------------------------

// 1a. String: Sequence of characters (single, double quotes, or Heredoc)
$textSingle = 'Single quotes treat text literally.';
$textDouble = "Double quotes allow variable parsing and escape characters: \n";
$multiLine = <<<TEXT
Heredoc syntax is great for multi-line text blocks
without escaping quotation marks.
TEXT;

// 1b. Integer: Whole non-decimal numbers (can be decimal, hex, octal, binary)
$decimalInt = 42;
$negativeInt = -350;
$hexInt = 0x1A;      // 26 in decimal
$binaryInt = 0b1010; // 10 in decimal
$readable = 1_000_000; // Underscores can be used for readability

// 1c. Float (Double): Decimal or exponential numbers
$price = 19.99;
$scientific = 1.2e3; // 1200

// 1d. Boolean: Only two possible states: true or false (case-insensitive)
$isActive = true;
$isVerified = false;

echo "--- 1. SCALAR TYPES ---\n";
var_dump($decimalInt, $price, $isActive, $hexInt);
echo "\n";


// ----------------------------------------------------------------------------
// 2. COMPOUND TYPES (Multiple values and structures)
// ----------------------------------------------------------------------------

// 2a. Array: An ordered map associating keys to values
$indexedArray = ["PHP", "TypeScript", "Python"];
$associativeArray = [
    "framework" => "Laravel",
    "version"   => 11,
    "isApi"     => true,
];

// 2b. Object: Instance of a programmer-defined class
class UserAccount {
    // Explicit typed properties (PHP 7.4+)
    public string $name;
    public string $role;

    public function __construct(string $name, string $role) {
        $this->name = $name;
        $this->role = $role;
    }
}

$userObj = new UserAccount("Rasel", "Engineer");

echo "--- 2. COMPOUND TYPES ---\n";
var_dump($indexedArray);
var_dump($associativeArray);
var_dump($userObj);
echo "\n";


// ----------------------------------------------------------------------------
// 3. SPECIAL TYPES
// ----------------------------------------------------------------------------

// 3a. NULL: Represents a variable with no assigned value, or explicitly cleared
$unassigned = null;

// 3b. Resource: Special variable holding a reference to an external resource
// Example: Open a file handle or a database connection
$fileHandle = fopen(__FILE__, "r"); // Opens this current file for reading

echo "--- 3. SPECIAL TYPES ---\n";
var_dump($unassigned);
var_dump($fileHandle); // Prints 'resource(...) of type (stream)'

// Always clean up resources when finished
if (is_resource($fileHandle)) {
    fclose($fileHandle);
}
echo "\n";


// ----------------------------------------------------------------------------
// 4. TYPE CHECKING FUNCTIONS
// ----------------------------------------------------------------------------
echo "--- 4. TYPE CHECKING ---\n";

$sample = 120.50;

// gettype() returns a string representation of the type
echo "gettype(\$sample): " . gettype($sample) . "\n";

// Boolean is_* checking functions
echo "is_float? "  . (is_float($sample) ? "Yes" : "No") . "\n";
echo "is_int? "    . (is_int($sample) ? "Yes" : "No") . "\n";
echo "is_string? " . (is_string($sample) ? "Yes" : "No") . "\n";
echo "is_array? "  . (is_array($sample) ? "Yes" : "No") . "\n";
echo "is_bool? "   . (is_bool($sample) ? "Yes" : "No") . "\n";
echo "is_null? "   . (is_null($sample) ? "Yes" : "No") . "\n\n";


// ----------------------------------------------------------------------------
// 5. TYPE CASTING (Explicitly changing a type)
// ----------------------------------------------------------------------------
echo "--- 5. EXPLICIT TYPE CASTING ---\n";

$rawNumber = "450.75px";

$toInt = (int) $rawNumber;       // Casts to 450 (drops decimal and trailing string)
$toFloat = (float) $rawNumber;   // Casts to 450.75
$toBool = (bool) $rawNumber;     // Any non-empty string evaluates to true
$toArray = (array) $rawNumber;   // Converts scalar into an array with one element

var_dump($toInt);
var_dump($toFloat);
var_dump($toBool);
var_dump($toArray);
echo "\n";


// ----------------------------------------------------------------------------
// 6. MODERN STRICT TYPING & UNION TYPES (PHP 8+)
// ----------------------------------------------------------------------------
echo "--- 6. MODERN STRICT TYPING & RETURN TYPES ---\n";

// This function accepts int or float (Union Type), returns string
function calculateDiscount(int|float $amount, float $rate = 0.10): string {
    $discounted = $amount - ($amount * $rate);
    return "Final Price: $" . number_format($discounted, 2);
}

// Nullable type (?string): Can receive a string OR null
function printMessage(?string $msg): void {
    if ($msg === null) {
        echo "No message provided.\n";
        return;
    }
    echo "Message: $msg\n";
}

echo calculateDiscount(100, 0.15) . "\n";
echo calculateDiscount(49.99) . "\n";
printMessage(null);
printMessage("PHP strict typing prevents runtime bugs!");