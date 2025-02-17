<?php
function modifyString($str) {
    // Get the last character of the string
    $lastChar = substr($str, -1);
    // Create a new string with the last character added at the front and back
    return $lastChar . $str . $lastChar;
}

// Test cases
echo modifyString("Red") . "\n";    // Output: "dRedd"
echo modifyString("Green") . "\n";  // Output: "nGreenn"
echo modifyString("1") . "\n";      // Output: "111"
?>
