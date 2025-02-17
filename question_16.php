<?php
function calculateCarsNeeded($numPeople) {
    // Each car can hold 5 people (4 passengers + 1 driver)
    $carCapacity = 5;
    // Calculate the number of cars needed
    $carsNeeded = ceil($numPeople / $carCapacity);
    return $carsNeeded;
}

// Example usage
$n = 12; // Replace with the number of people
echo "Number of cars needed: " . calculateCarsNeeded($n);
?>
