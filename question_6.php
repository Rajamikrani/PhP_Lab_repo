<?php
// Function to convert age in years to days
function ageInDays($years) {
    return $years * 365; // Assuming 1 year = 365 days
}

// Example usage
$ageInYears = 25; // Input: 25 years
$ageInDays = ageInDays($ageInYears);
echo "Age of $ageInYears years is approximately $ageInDays days.";
?>
