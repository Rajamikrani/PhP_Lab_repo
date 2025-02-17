<?php
// Function to calculate power
function calculatePower($voltage, $current) {
    return $voltage * $current; // Power = Voltage × Current
}
 
// Example usage
$voltage = 230; // Voltage in volts
$current = 10;  // Current in amperes

$power = calculatePower($voltage, $current);
echo "The power is $power watts.";
?>
