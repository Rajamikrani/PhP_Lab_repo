<?php
function computeSum($num1, $num2) {
    if ($num1 === $num2) {
        // If the two numbers are the same, return triple their sum
        return 3 * ($num1 + $num2);
    } else {
        // Otherwise, return the regular sum
        return $num1 + $num2;
    }
}

// Example usage
$num1 = 5;
$num2 = 5;
echo "Result: " . computeSum($num1, $num2); // Output: 30

$num1 = 4;
$num2 = 7;
echo "\nResult: " . computeSum($num1, $num2); // Output: 11
?>
