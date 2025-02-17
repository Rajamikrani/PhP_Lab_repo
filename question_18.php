<?php
function getAbsoluteDifference($n) {
    $difference = abs($n - 51); // Compute the absolute difference
    
    if ($n > 51) {
        return 3 * $difference; // Return triple the difference if n > 51
    } else {
        return $difference; // Return the absolute difference otherwise
    }
}

// Example usage
$n1 = 30;
echo "Result for n = $n1: " . getAbsoluteDifference($n1) . "\n"; // Output: 21

$n2 = 60;
echo "Result for n = $n2: " . getAbsoluteDifference($n2) . "\n"; // Output: 27
?>
