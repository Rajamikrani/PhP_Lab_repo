<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculate Circle Area</title>
</head>
<body>
    <h2>Calculate the Area of a Circle</h2>
    <form method="POST" action="">
        <label for="radius">Enter Radius:</label>
        <input type="number" step="0.01" id="radius" name="radius" required>
        <button type="submit">Calculate</button>
    </form>

    <?php
    // Define PI as a constant
    define("PI", 3.14159);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the radius from the form input
        $radius = $_POST['radius'];

        // Check if the radius is a valid positive number
        if (is_numeric($radius) && $radius > 0) {
            // Calculate the area of the circle
            $area = PI * pow($radius, 2);
            echo "<p>The area of the circle with radius " . htmlspecialchars($radius) . " is: " . number_format($area, 2) . "</p>";
        } else {
            echo "<p>Please enter a valid positive number for the radius.</p>";
        }
    }
    ?>
</body>
</html>
