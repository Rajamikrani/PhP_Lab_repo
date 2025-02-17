<?php
function addIf($str) {
    // Check if the string already starts with "if"
    if (substr($str, 0, 2) === "if") {
        return $str; // Return the string unchanged
    } else {
        return "if " . $str; // Add "if" to the front of the string
    }
}

// Test cases
echo addIf("if else") . "\n"; // Output: "if else"
echo addIf("else") . "\n";    // Output: "if else"
echo addIf("if") . "\n";      // Output: "if"
?>
