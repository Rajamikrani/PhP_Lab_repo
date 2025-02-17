<?php
function convertString($str) {
    // Get the length of the string
    $length = strlen($str);

    // Check if the length of the string is less than 3
    if ($length < 3) {
        return strtoupper($str); // Convert the entire string to uppercase
    } else {
        // Get the last 3 characters and convert them to uppercase
        $lastThree = strtoupper(substr($str, -3));
        // Combine the rest of the string with the converted last 3 characters
        return substr($str, 0, $length - 3) . $lastThree;
    }
}

// Test cases
echo convertString("Nepal") . "\n";    // Output: "NePAL"
echo convertString("Npl") . "\n";      // Output: "NPL"
echo convertString("Bca") . "\n";      // Output: "BCA"
echo convertString("Bachelor") . "\n"; // Output: "BacheLOR"
?>
