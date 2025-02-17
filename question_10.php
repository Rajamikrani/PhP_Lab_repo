<?php
// Function to check if two strings have equal lengths
function areStringsEqualLength($string1, $string2) {
    return strlen($string1) === strlen($string2);
}

// Example usage
$string1 = "hello";
$string2 = "world";

if (areStringsEqualLength($string1, $string2)) {
    echo "The two strings have equal lengths.";
} else {
    echo "The two strings do not have equal lengths.";
}
?>
