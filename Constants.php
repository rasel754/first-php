<?php
/**
 * ============================================================================
 * PHP CONSTANTS: COMPLETE REFERENCE & PRACTICE
 * ============================================================================
 * Key Rules:
 * 1. Do NOT use the '$' symbol when declaring or reading constants.
 * 2. Immutable: Cannot be changed or undefined once created.
 * 3. Scope: Automatically global across the entire script.
 * 4. Naming convention: UPPERCASE_WITH_UNDERSCORES.
 */

// ----------------------------------------------------------------------------
// 1. DECLARATION: define() vs const
// ----------------------------------------------------------------------------

// Method A: define() - evaluated at runtime
define("APP_NAME", "ShopPulse API");
define("APP_VERSION", "1.4.0");

// Method B: const - evaluated at compile time (cleaner, modern syntax)
const API_TIMEOUT = 30; // seconds
const IS_PRODUCTION = false;

echo "--- 1. BASIC CONSTANTS ---\n";
echo "Application: " . APP_NAME . "\n";
echo "Version: " . APP_VERSION . "\n";
echo "Timeout: " . API_TIMEOUT . "s\n\n";


// ----------------------------------------------------------------------------
// 2. CONSTANT ARRAYS (Supported in modern PHP)
// ----------------------------------------------------------------------------

// Arrays defined with const
const ALLOWED_EXTENSIONS = ["jpg", "png", "webp", "pdf"];

// Arrays defined with define()
define("DATABASE_CONFIG", [
    "host" => "localhost",
    "port" => 5432,
    "user" => "admin"
]);

echo "--- 2. CONSTANT ARRAYS ---\n";
echo "Primary allowed file: " . ALLOWED_EXTENSIONS[0] . "\n";
echo "Database host: " . DATABASE_CONFIG["host"] . "\n\n";


// ----------------------------------------------------------------------------
// 3. GLOBAL SCOPE DEMONSTRATION
// ----------------------------------------------------------------------------

const SITE_URL = "https://example.com";

function printSiteUrl() {
    // Notice: NO 'global $SITE_URL' needed here!
    // Constants are automatically accessible anywhere in the script.
    echo "Site URL from inside a function: " . SITE_URL . "\n";
}

echo "--- 3. SCOPE ---\n";
printSiteUrl();
echo "\n";


// ----------------------------------------------------------------------------
// 4. CHECKING IF A CONSTANT EXISTS (defined)
// ----------------------------------------------------------------------------

echo "--- 4. EXISTENCE CHECK ---\n";

if (defined("APP_NAME")) {
    echo "Constant APP_NAME is defined.\n";
}

// Safely reading dynamically named constants with constant()
$targetConstant = "APP_VERSION";
if (defined($targetConstant)) {
    echo "Dynamic lookup for $targetConstant: " . constant($targetConstant) . "\n";
}
echo "\n";


// ----------------------------------------------------------------------------
// 5. CLASS CONSTANTS (Object-Oriented Preview)
// ----------------------------------------------------------------------------

class OrderStatus {
    // Class constants must use the 'const' keyword, not define()
    public const PENDING = "pending";
    public const COMPLETED = "completed";
    public const CANCELLED = "cancelled";
}

echo "--- 5. CLASS CONSTANTS ---\n";
// Access class constants using the Scope Resolution Operator (::)
echo "Default Order Status: " . OrderStatus::PENDING . "\n";
echo "Final Order Status: " . OrderStatus::COMPLETED . "\n\n";


// ----------------------------------------------------------------------------
// 6. PHP MAGIC CONSTANTS (Built into the language engine)
// ----------------------------------------------------------------------------
// These change dynamically depending on where they are executed.
// Note: They start and end with two underscores (__).

echo "--- 6. MAGIC CONSTANTS ---\n";
echo "Current Line: " . __LINE__ . "\n";           // Current line number
echo "Current File: " . __FILE__ . "\n";           // Full path to this file
echo "Current Dir:  " . __DIR__ . "\n";            // Directory containing this file

function demoMagicConstant() {
    echo "Running inside function: " . __FUNCTION__ . "\n";
}
demoMagicConstant();