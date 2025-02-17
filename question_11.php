<?php
// Function to check if a number is divisible by 5
function isDivisibleByFive($number) {
    return $number % 5 === 0;
}

// Example usage
$number = 15;

if (isDivisibleByFive($number)) {
    echo "$number is divisible by 5.";
} else {
    echo "$number is not divisible by 5.";
}
?>
