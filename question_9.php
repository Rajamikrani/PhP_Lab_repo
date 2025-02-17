<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Football Points Calculator</title>
</head>
<body>
    <h1>Football Points Calculator</h1>
    <form method="post">
        <label for="wins">Number of Wins:</label>
        <input type="number" id="wins" name="wins" min="0" required>
        <br><br>
        <label for="draws">Number of Draws:</label>
        <input type="number" id="draws" name="draws" min="0" required>
        <br><br>
        <label for="losses">Number of Losses:</label>
        <input type="number" id="losses" name="losses" min="0" required>
        <br><br>
        <button type="submit">Calculate</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Get user inputs
        $wins = $_POST["wins"];
        $draws = $_POST["draws"];
        $losses = $_POST["losses"];

        // Calculate total points
        $totalPoints = ($wins * 3) + ($draws * 1) + ($losses * 0);

        // Display the result
        echo "<h2>Total Points: $totalPoints</h2>";
    }
    ?>
</body>
</html>
