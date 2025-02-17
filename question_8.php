<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal Legs Calculator</title>
</head>
<body>
    <h1>Animal Legs Calculator</h1>
    <form method="post">
        <label for="chickens">Number of Chickens:</label>
        <input type="number" id="chickens" name="chickens" min="0" required>
        <br><br>
        <label for="cows">Number of Cows:</label>
        <input type="number" id="cows" name="cows" min="0" required>
        <br><br>
        <label for="pigs">Number of Pigs:</label>
        <input type="number" id="pigs" name="pigs" min="0" required>
        <br><br>
        <button type="submit">Calculate</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Get user inputs
        $chickens = $_POST["chickens"];
        $cows = $_POST["cows"];
        $pigs = $_POST["pigs"];

        // Calculate total legs
        $totalLegs = ($chickens * 2) + ($cows * 4) + ($pigs * 4);

        // Display the result
        echo "<h2>Total Legs: $totalLegs</h2>";
    }
    ?>
</body>
</html>
