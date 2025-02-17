<?php
function modifyString($str) {
    // Get the first 3 characters of the string
    $front = substr($str, 0, 3);
    // Create a new string with the first 3 characters added at the front and back
    return $front . $str . $front;
}

// Test cases
echo modifyString("Python") . "\n";  // Output: "PytPythonPyt"
echo modifyString("JS") . "\n";      // Output: "JSJSJS"
echo modifyString("Code") . "\n";    // Output: "CodCodeCod"
?>
