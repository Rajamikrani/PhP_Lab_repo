<?php
// Function to calculate area of the given shape
function calculateArea($base, $height, $shape) {
    if ($shape === "triangle") {
        // Area of a triangle = (base * height) / 2
        return ($base * $height) / 2; 
    } elseif ($shape === "parallelogram") {
        // Area of a parallelogram = base * height
        return $base * $height;
    } else {
        return "Invalid shape type.";
    }
}

// Example usage
$base = 5.0;  // base value (decimal)
$height = 10.0;  // height value (decimal)
$shape = "triangle";  // shape type

$area = calculateArea($base, $height, $shape);
echo "The area of the $shape is: $area";
?>
