<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Largest Number</title>
</head>
<body>
    <h2>Find the Largest Number</h2>
    <form method="post">
        <label for="num1">Enter First Number:</label>
        <input type="number" id="num1" name="num1" required>
        <br><br>
        <label for="num2">Enter Second Number:</label>
        <input type="number" id="num2" name="num2" required>
        <br><br>
        <label for="num3">Enter Third Number:</label>
        <input type="number" id="num3" name="num3" required>
        <br><br>
        <button type="submit">Find Largest</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve numbers from form inputs
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $num3 = $_POST['num3'];

        // Check the largest number
        if ($num1 >= $num2 && $num1 >= $num3) {
            echo "<h3>The largest number is: $num1</h3>";
        } elseif ($num2 >= $num1 && $num2 >= $num3) {
            echo "<h3>The largest number is: $num2</h3>";
        } else {
            echo "<h3>The largest number is: $num3</h3>";
        }
    }
    ?>
</body>
</html>
