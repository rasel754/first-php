<?php
/**
 * ============================================================================
 * PHP VARIABLES: COMPLETE REFERENCE & PRACTICE
 * ============================================================================
 * Key Rules:
 * 1. Must always start with a '$' symbol.
 * 2. Must start with a letter or an underscore (_), never a number.
 * 3. Case-sensitive: $age and $AGE are different.
 * 4. PHP is dynamically typed: types update automatically based on values.
 */

// ----------------------------------------------------------------------------
// 1. BASIC SCALAR TYPES (Holds a single value)
// ----------------------------------------------------------------------------

// String: Text enclosed in single ('') or double ("") quotes
$greeting = "Hello, PHP!"; 

// Integer: Whole number without decimals (positive or negative)
$age = 25; 

// Float (Double): Number with a fractional/decimal point
$price = 19.99; 

// Boolean: Truth values (true or false, case-insensitive)
$isLoggedIn = true; 
$hasSubscription = false;

// Outputting values
echo "--- 1. SCALAR TYPES ---<br/>";
echo "Greeting: $greeting<br/>";
echo "Age: $age<br/>";
echo "Price: $$price<br/>";
// Note: true prints as '1', false prints as empty string ''
echo "Logged In: " . ($isLoggedIn ? "Yes" : "No") . "<br/><br/>";


// ----------------------------------------------------------------------------
// 2. COMPOUND TYPES (Holds multiple values)
// ----------------------------------------------------------------------------

// Indexed Array: Ordered list accessed by numeric index (0-based)
$colors = ["Red", "Green", "Blue"];

// Associative Array: Key-value pairs (like dictionaries/maps)
$userProfile = [
    "username" => "dev_rasel",
    "role"     => "Developer",
    "status"   => "Active"
];

echo "--- 2. COMPOUND TYPES ---<br/>";
echo "First Color: " . $colors[0] . "<br/>";
echo "User Role: " . $userProfile["role"] . "<br/><br/>";


// ----------------------------------------------------------------------------
// 3. SPECIAL TYPES
// ----------------------------------------------------------------------------

// NULL: Represents a variable with no value or explicitly cleared
$emptyData = null;

echo "--- 3. SPECIAL TYPES ---<br/>";
echo "Is emptyData null? " . (is_null($emptyData) ? "Yes" : "No") . "<br/><br/>";


// ----------------------------------------------------------------------------
// 4. STRING INTERPOLATION & CONCATENATION
// ----------------------------------------------------------------------------

$framework = "Laravel";

// Double quotes (""): Parses variables directly inside the string
$doubleQuoteStr = "Working with $framework is efficient.";

// Single quotes (''): Treats everything literally (no variable interpolation)
$singleQuoteStr = 'Working with $framework is efficient.'; 

// Concatenation operator: Dot (.)
$concatenated = "Framework: " . $framework . " (Version 11+)";

echo "--- 4. INTERPOLATION ---<br/>";
echo "Double quotes: $doubleQuoteStr<br/>";
echo "Single quotes: $singleQuoteStr<br/>";
echo "Concatenated:  $concatenated<br/><br/>";


// ----------------------------------------------------------------------------
// 5. ASSIGNMENT BY VALUE VS. BY REFERENCE
// ----------------------------------------------------------------------------

// By Value (Default): Modifying $b does NOT affect $a
$a = 10;
$b = $a; 
$b = 20;

// By Reference (&): Both variables point to the exact same memory location
$x = 100;
$y = &$x; // Note the '&' symbol
$y = 200; // Modifying $y also updates $x

echo "--- 5. VALUE VS REFERENCE ---<br/>";
echo "By Value: \$a = $a, \$b = $b (a remains unchanged)<br/>";
echo "By Reference: \$x = $x, \$y = $y (x updated via y)<br/><br/>";


// ----------------------------------------------------------------------------
// 6. VARIABLE SCOPE (Local, Global, Static)
// ----------------------------------------------------------------------------

$globalCounter = 50; // Global scope

function testScope() {
    // 6a. Local Variable: Only exists inside this function
    $localMsg = "I live only inside this function.";

    // 6b. Accessing global variable inside a function requires the 'global' keyword
    global $globalCounter;
    $globalCounter += 10;

    // 6c. Static Variable: Retains its value across multiple function calls
    static $callCount = 0;
    $callCount++;

    echo "Function Call #$callCount | Global Counter: $globalCounter\n";
}

echo "--- 6. SCOPE ---\n";
testScope();
testScope();
testScope();
echo "\n";


// ----------------------------------------------------------------------------
// 7. VARIABLE VARIABLES (Advanced dynamic naming)
// ----------------------------------------------------------------------------

$target = "role";
$$target = "Software Engineer"; // Creates a variable named $role

echo "--- 7. VARIABLE VARIABLES ---<br/>";
echo "Value of \$target: $target<br/>";
echo "Value of \$\$target (\$role): $role<br/><br/>";


// ----------------------------------------------------------------------------
// 8. USEFUL DEBUGGING FUNCTIONS
// ----------------------------------------------------------------------------
echo "--- 8. DEBUGGING OUTPUT ---<br/>";

// var_dump(): Prints detailed type, length, and value information
echo "var_dump(\$price):<br/>";
var_dump($price);

// print_r(): Prints human-readable structure (useful for arrays and objects)
echo "<br/>print_r(\$userProfile):<br/>";
print_r($userProfile);