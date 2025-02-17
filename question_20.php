<?php
function createNewString($str) {
    // Check if the string length is less than 2
    if (strlen($str) < 2) {
        return $str; // Return the original string
    } else {
        // Get the first 2 characters of the string
        $front = substr($str, 0, 2);
        // Repeat the 2 characters 4 times
        return str_repeat($front, 4);
    }
}

// Test cases
echo createNewString("C Sharp") . "\n"; // Output: "CCCC"
echo createNewString("JS") . "\n";      // Output: "JSJSJSJS"
echo createNewString("a") . "\n";       // Output: "a"
?>
